<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pythonController extends Controller
{
    public function sendImage(Request $request)
    {

    }
}



        $apiURL = 'https://api.mywebtuts.com/api/users';

        $postInput = [

            'first_name' => 'Hardik',

            'last_name' => 'Savani',

            'email' => 'example@gmail.com'

        ];



        $headers = [

            'X-header' => 'value'

        ];



        $response = Http::withHeaders($headers)->post($apiURL, $postInput);



        $statusCode = $response->status();

        $responseBody = json_decode($response->getBody(), true);

