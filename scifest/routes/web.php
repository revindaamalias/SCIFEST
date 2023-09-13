<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhpDocXController;
use App\Http\Controllers\PhpSpreadSheetController;
use App\Http\Controllers\LaporanCtrl;
use App\Http\Controllers\ViewDataController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\WebcamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [LoginController::class, 'index']);

// Route::get('login','App\Http\Controllers\LoginController@showLoginForm');
Route::get('login', [LoginController::class, 'showLoginForm']);
// Route::POST('login','App\Http\Controllers\LoginController@authenticate');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

// Route::get('dashboard','App\Http\Controllers\DashboardController@index');
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('result', [ResultController::class, 'index']);

Route::get('webcam', [WebcamController::class, 'index']);
Route::post('webcam/store', [WebcamController::class, 'store']);