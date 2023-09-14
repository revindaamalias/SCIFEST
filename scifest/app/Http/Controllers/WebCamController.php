<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use DB;

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
        // dd($request);
        $img = $request->image;
        $folderPath = "img/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = date("YmdHis") . '.png';

        $file = $folderPath . $fileName;
        Storage::disk('local')->put($file, $image_base64);
        DB::connection('mysql_scikemitraan')->table('tb_foto')->insert([
            'gambar' => $file,
            'name' => date("d F Y").$fileName,
            'created_at' => date("Y-m-d h:i:s")

        ]);

        return redirect()->to('/result')->with(['message'=>'Image saved successfully']);
    }
}
