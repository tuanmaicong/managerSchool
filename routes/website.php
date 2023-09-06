<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "THPT Mỹ Đức B";
    return view('index',compact('title'));
})->name('home');
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'create'])->name('postRegister');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('postLogin');
