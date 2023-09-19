<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResultController extends Controller
{
    public function index()
    {
        // $file = DB::table('tb_foto')->orderBy('id','desc')->first();
        // if($file)
        // {
        //     return response()->json([
        //         'status'=>200,
        //         'image'=>'no Record found'
        //     ],404);
        // }else{
        //     return response()->json([
        //         'status'=>404,
        //         'image'=>'no Record found'
        //     ],404);
        // }
        // dd($file);
        return view ('results.result');
    }
    public function fetchImageIndex()
    {
        $file = DB::table('tb_foto')->orderBy('id','desc')->first();
        if($file)
        {
            return response()->json([
                'status'=>200,
                'image'=>$file
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'image'=>'no Record found'
            ],404);
        }
    }
}
