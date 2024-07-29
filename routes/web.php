<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::resource("penduduk", PendudukController::class);
Route::resource('Catatan', CatatanController::class);


Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/', function () {
    return view('Login')->with('title', 'Login Page');
});

//Auth
Route::get('/Register',[RegisterController::class,'index']);
Route::post('/Register',[RegisterController::class,'store']);

Route::get('/Login',[LoginController::class,'index']);
Route::post('/Login',[LoginController::class,'store']);


Route::view('/feedback', 'feedback');