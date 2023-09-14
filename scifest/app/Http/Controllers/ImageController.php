<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function displayImage($filename)
    {
        $path = storage_public('images/'.$filename);
        if(!File::exist($path)){
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimetype($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
