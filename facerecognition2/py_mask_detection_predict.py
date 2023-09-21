import numpy as np 
import pandas as pd 
import os
import cv2
import matplotlib.pyplot as plt
import tensorflow as tf
from tensorflow.keras import layers
from flask import Flask, jsonify, request
import base64
from PIL import Image

app = Flask(__name__)


###############################################################################################
# object detection using sliding window approach                                              #
###############################################################################################
@app.route('/processImg', methods = ['POST'])
def LoadAndDetectObject(boxSize = 100, lim = 200):
    data = request.get_json()

    img = data['rawImg']
    img = base64.b64decode(img)
    image_file_path = "current.jpg"
    with open(image_file_path, "wb") as image_file:
        image_file.write(img)
    
    # return responseData
    path = image_file_path

    MyCnn = tf.keras.models.load_model('./maskDetector.keras')
    class_names = ['with_mask','without_mask']

    img = plt.imread(path)
    img = cv2.resize(img,(200,200))
    numplots = (lim / boxSize)*(lim /boxSize)
    stride = int ((lim - boxSize)/ boxSize)
    
    xCurPos = 0
    yCurPos = 0
    Red = img [:,:,0]
    Blue = img[:,:,1]
    Green = img[:,:,2]
    
    y_pos = 0
    i = 0
    while y_pos < lim:
        x_pos = 0
        while x_pos < lim:
            xCurPos = x_pos
            yCurPos = y_pos
            i += 1
            if i > numplots + 1000:
                cv2.putText(img, 'No Mask', (50,50), cv2.FONT_HERSHEY_SIMPLEX, 0.5, 1)
                plt.imshow(img)

                plt.imsave('curr.jpg', img)
                with open('curr.jpg', "rb") as image_file:
                    image_binary = image_file.read()

                # Encode the binary image data to base64
                base64_encoded_image = base64.b64encode(image_binary).decode('utf-8')
                return {'rawImgProcessed': base64_encoded_image, 'msg' : 'no mask'}
            
            
            r = Red[x_pos : (x_pos + boxSize), y_pos : (y_pos + boxSize)]
            g = Blue[x_pos : (x_pos + boxSize), y_pos : (y_pos + boxSize)]
            b = Green[x_pos : (x_pos + boxSize), y_pos : (y_pos + boxSize)]
            
            ## sanity check
            xx, yy = r.shape
            if xx*yy != boxSize*boxSize:
                x_pos += stride
                continue
            
            imageSegment = cv2.merge((r,g,b))
            imageSegment  = np.array(imageSegment, dtype = 'uint8')
            imageSegment = cv2.resize(imageSegment, (lim, lim))
            result = (MyCnn.predict(np.array([imageSegment]),verbose=0))
            probab = max(result.flatten())
            result = (class_names[np.argmax(result)])
            #print(probab)
            
            if result == 'with_mask' and probab >= 0.8:
                probab = int (probab * 100) / 100
                img = cv2.rectangle(img, (xCurPos,yCurPos), (xCurPos + boxSize, yCurPos + boxSize), (0,255,0), 1) 
                cv2.putText(img, 'Mask', (xCurPos,yCurPos + boxSize), cv2.FONT_HERSHEY_SIMPLEX, 0.7, 1)
                plt.imshow(img)

                plt.imsave('curr.jpg', img)
                with open('curr.jpg', "rb") as image_file:
                    image_binary = image_file.read()

                # Encode the binary image data to base64
                base64_encoded_image = base64.b64encode(image_binary).decode('utf-8')
                return {'rawImgProcessed': base64_encoded_image, 'msg' : 'no mask'}

            x_pos += stride
        y_pos += stride
        
    cv2.putText(img, 'No Mask', (100,100), cv2.FONT_HERSHEY_SIMPLEX, 0.7, 1)
    plt.imshow(img)
    
    plt.imsave('curr.jpg', img)
    with open('curr.jpg', "rb") as image_file:
        image_binary = image_file.read()

    # Encode the binary image data to base64
    base64_encoded_image = base64.b64encode(image_binary).decode('utf-8')
    return {'rawImgProcessed': base64_encoded_image, 'msg' : 'no mask'}
    
if __name__ == '__main__':
    ip_host='192.168.100.84'
    app.run(debug=True, host=ip_host)

