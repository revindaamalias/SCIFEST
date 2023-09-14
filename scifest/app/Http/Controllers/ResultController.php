<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResultController extends Controller
{
    public function index()
    {
        $file = DB::table('tb_foto')->orderBy('id','desc')->first();
        // dd($file);
        return view('results.result', compact('file'));
    }
}
