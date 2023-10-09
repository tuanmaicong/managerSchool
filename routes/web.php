<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

include(base_path('routes/admin.php'));
include(base_path('routes/website.php'));
Route::fallback(function (){
    $title = "404 Not found";
    return view('website.pages.404',compact('title'));
});

