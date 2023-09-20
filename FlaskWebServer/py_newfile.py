#new file
#-----------------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------------
#
import json
import requests
import re
import sys
import base64
import asyncio
import mysql.connector

req = requests.get('http://127.0.0.1:8000/fetchImage')
req_json= req.json()
strImage = str(req_json['image']['base64'])
imageSplit = strImage.partition(",")
image_decode = base64.b64decode(imageSplit[2])

async def main():
    task = asyncio.create_task(imageComparasi())
    
    print('c')
    await task
    print("1")
    

async def imageComparasi():
    #img = mpimg.imread(image_decode)
    # image_result = open('deer_decode.jpg', 'wb') # create a writable image and write the decoding result
    # image_result.write(image_decode)
    data = 13
    print('a')
    await insertDatabase(data)
    return 

async def insertDatabase(data):
    try:
        connection = mysql.connector.connect(host='localhost',
                                            database='scifest',
                                            user='root',
                                            password='')

        mySql_insert_query = "INSERT INTO verifikasi_user (foto_id, user_id, is_match) VALUES (%s,%s,%s) "
        val =  (req_json['image']['id'],data,1)
        
        cursor = connection.cursor()
        cursor.execute(mySql_insert_query,val)
        connection.commit()
        print(cursor.rowcount, "Record inserted successfully into Laptop table")
        cursor.close()

    except mysql.connector.Error as error:
        print("Failed to insert record into Laptop table {}".format(error))

    finally:
        if connection.is_connected():
            connection.close()
            print("MySQL connection is closed")

    # print(req_json)
    
asyncio.run(main())

# print(imageSplit[2])