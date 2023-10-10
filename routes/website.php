<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('contact',[ContactController::class,'index'])->name('getContact');
Route::post('postContact',[ContactController::class,'postContact'])->name('postContact');
Route::get('news',[NewsController::class,'index'])->name('news');
Route::get('news/{id}/detail',[NewsController::class,'detail'])->name('news.detail');
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'create'])->name('postRegister');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('postLogin');
