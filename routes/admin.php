<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


//Route prefix để nhóm các route có admin/ đằng trước
//dùng middleware auth khi chưa đăng nhập sẽ tự động redirect đến trang login có thể sửa redirect đến
//trang đích khác trong Middlware/Authentication
//dùng ->as('admin') để thêm admin. trước route
Route::get('login',[LoginController::class,'showFormLogin'])->name('auth.login');
Route::post('login',[LoginController::class,'login'])->name('postLogin');
Route::post('logout',[LoginController::class,'logout'])->name('auth.logout');
Route::prefix('admin')
    ->as('admin.')
    ->middleware(['auth','check_admin'])
    ->group(function (){
        Route::get('/',function ()
        {
            $title = 'SB Admin 2 - Dashboard';
            return view('admin.dashboard',compact('title'));
        })->name('dashboard');
        Route::resource('users',UserController::class);
        Route::get('profile/{id}',[ProfileController::class,'index'])->name('profile.edit');
        Route::post('profile/{id}',[ProfileController::class,'update'])->name('profile.update');
        Route::resource('category', CategoriesController::class);
        Route::resource('role', RolesController::class);
    });
