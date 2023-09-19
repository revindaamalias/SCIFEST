<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebcamController;
use App\Http\Controllers\ResultController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('webcam', [WebcamController::class, 'index']);

// Route::get('result', [ResultController::class, 'index']);
// Route::post('webcam/store', [WebcamController::class, 'store']);
