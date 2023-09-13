<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Storage;
  
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
        $folderPath = "uploads/";
        
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = date("YmdHis") . '.png';
        
        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);
        
        return redirect()->to('/result')->with(['message'=>'Image saved successfully']);
    }
}