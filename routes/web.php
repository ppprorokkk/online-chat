<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthotizeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MessageController::class,'index']);
Route::put('/',[MessageController::class,'add']);

Route::get('/mess',[MessageController::class,'get']);

Route::get('/reg', [AuthotizeController::class,'reg_index']);
Route::post('/reg', [AuthotizeController::class,'reg']);

Route::get('/log', [AuthotizeController::class,'login_index']);
Route::post('/log', [AuthotizeController::class,'login']);

Route::get('/logout', [AuthotizeController::class,'logout']);
