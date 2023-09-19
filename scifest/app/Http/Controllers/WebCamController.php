<?php

namespace App\Http\Controllers;

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
            $fileName = date("YmdHis") . '.png';

            $file = $folderPath . $fileName;
            Storage::disk('local')->put($file, $image_base64);
            $saveImage = DB::connection('mysql_scikemitraan')->table('tb_foto')->insert([
                'gambar' => $file,
                'base64' => $img,
                'name' => date("d F Y").$fileName,
                'created_at' => date("Y-m-d h:i:s")
            ]);


            if($saveImage){
                // $pyathonCommand = escapeshellcmd('');
                // $pythonShell = shell_exec(escapeshellcmd("C:/Users/hanan/Documents/Work/Sucofindo/SCIFest/FlaskWebServer/pywebserver.py"));
                // echo $pythonShell;
                // $process = new Process(['C:/Users/hanan/AppData/Local/Programs/Python/Python311/python.exe', 'C:/Users/hanan/Documents/Work/Sucofindo/SCIFest/FlaskWebServer/pywebserver.py']);
                // $process= Process::fromShellCommandline('py C:/Users/hanan/Documents/Work/Sucofindo/SCIFest/FlaskWebServer/pywebserver.py');
                // $process->run();

                // if (!$process->isSuccessful()) {
                //     throw new ProcessFailedException($process);
                // }
                // $command = escapeshellcmd('C:/Users/hanan/Documents/Work/Sucofindo/SCIFest/FlaskWebServer/pywebserver.py');
                // $output = shell_exec($command);
                // echo $process;

                $output = shell_exec('py C:/Users/hanan/Documents/Work/Sucofindo/SCIFest/FlaskWebServer/pywebserver.py');
                return response()->json([
                    'status'=>200,
                    'message'=>'Image saved successfully'
                ],200);
            }else{
                return response()->json([
                    'status'=>500,
                    'message'=>'Something Warong'
                ],500);
            }
        }
        // return redirect()->to('/result')->with(['message'=>'Image saved successfully']);

    }
}
