<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Storage;
use DB;
use Http;
use Validator;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class WebcamController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('webcam');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=> 422,
                'error'=>$validator->messages()
            ],422);

            $this->throwValidationException(
                $request, $validator
            );
        }else {
            $img = $request->image;
            $folderPath = "img/";

            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];

            $image_base64 = base64_decode($image_parts[1]);
            $fileName = date("YmdHis") . '.jpg';

            $file = $folderPath . $fileName;
            Storage::disk('local')->put($file, $image_base64);
            // $saveImage = DB::connection('mysql_scikemitraan')->table('tb_foto')->insert([
            //     'gambar' => $file,
            //     'base64' => $img,
            //     'name' => date("d F Y").$fileName,
            //     'created_at' => date("Y-m-d h:i:s")
            // ]);

            // tambahan starts here
            $host = "192.168.100.84:5000/processImg";
            $datas = [
                'filename' => $file,
                'rawImg' => explode(',',$request->image)[1],
            ];
            
            $client = new Client();
            $response = $client->post($host, [
                'json' => $datas
            ]);
            
            if ($response->getStatusCode() === 200){
                $body = json_decode($response->getBody(), true);
                $image_data_processed = base64_decode($body['rawImgProcessed']);
                $fileNameProcessed = date("YmdHis") . '_result.jpg';
                $fileNameProcessed = $folderPath . $fileName;
                Storage::disk('local')->put($fileNameProcessed, $image_data_processed);

                DB::connection('mysql_scikemitraan')->table('tb_foto')->insert([
                    'gambar' => $fileNameProcessed,
                    'base64' => $body['rawImgProcessed'],
                    'name' => date("d F Y") . '_'.$body['msg'].'_'.$fileName,
                    'created_at' => date("Y-m-d h:i:s")
                ]);
                // return response()->json(json_decode($response->getBody(), true));
                return response()->json(['message' => 'process success']);
            }
            // if($saveImage){
            // }
        }
    }
}
