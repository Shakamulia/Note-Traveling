<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\CatatanPerjalananController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CatatanController;

// Route::get('/', 'HomeController');

Route::resource("penduduk", PendudukController::class);
Route::resource('/Catatan', CatatanController::class);

Route::get('/dashboard', function () {
    return view('home', [
        'title' => 'Dashboard'
    ]);
});
Route::get('/', function () {
    return view('Login')->with('title', 'Login Page');
});
Route::get('/Penduduk/create', function () {
    return view('Penduduk.create')->with('title', 'Penduduk creaet');
});
Route::get('/Register',[RegisterController::class,'index']);
Route::view('/feedback', 'feedback');