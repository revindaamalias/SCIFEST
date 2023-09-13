from flask import Flask, jsonify, request

app = Flask(__name__)

@app.route('/returnData', methods = ['GET'])
def ReturnData():
    if (request.method == 'GET'):
        data = {
            'Pesan': "Halo",
            'Subjek': 'Sucofindo'
        }
        return jsonify(data)

# @app.route('/processData', methods= ['GET'])
@app.route('/processData', methods= ['POST'])
def ProcessData():
    # data = request.get_json()
    # id = data['id']
    # arr = data['array']

    return request.args.get('name')

if __name__ == '__main__':
    ip_host='192.168.100.84'
    app.run(debug=True, host=ip_host)