<?php

use Illuminate\Support\Facades\Route;
use App\Models\Raihan;
use App\Http\Controllers\RaihanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SelengkapnyaController;
use App\Http\Controllers\RaihanLoginController;
use App\Http\Controllers\RaihanRegisterController;
use App\Http\Controllers\CobaController;
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

Route::get('/home', [RaihanController::class,'index']);
// Route::get('/', [RaihanController::class,'home']);
Route::get('/home', [HomeController::class,'index']);
// Route::get('/about',[RaihanController::class,'about']);
Route::get('/about',[AboutController::class,'index']);
// Route::get('/comment',[RaihanController::class,'comment']);
Route::get('/comment',[CommentController::class,'index']);
// Route::get('/selengkapnya', [RaihanController::class,'selengkapnya']);
Route::get('/selengkapnya', [SelengkapnyaController::class,'index']);

Route::get('/raihanlogin', [RaihanLoginController::class,'index']);
Route::post('/raihanlogin', [RaihanLoginController::class,'validasilogin']);

Route::get('/raihanregister', [RaihanRegisterController::class,'index']);
Route::post('/raihanregister', [RaihanRegisterController::class,'store']);

Route::get('/registrasi', [RaihanRegisterController::class,'registrasi']);
Route::post('/registrasi', [RaihanRegisterController::class,'simpanregistrasi']);

Route::post('/raihanlogout', [RaihanLoginController::class,'logout']);


Route::get('/coba', [CobaController::class,'index'])->middleware("auth");


