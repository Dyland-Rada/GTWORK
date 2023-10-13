<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Request\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;



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

Route::get('/', [HomeController::class,'index']);

Route::get('/register',[RegisterController::class,'show']);

Route::post('/register',[RegisterController::class,'register']);

Route::get('/login',[LoginController::class,'show']);

Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index']);

Route::get('/logout',[LogoutController::class,'logout']);




            