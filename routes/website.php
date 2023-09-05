<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "THPT Mỹ Đức B";
    return view('client.index',compact('title'));
});
