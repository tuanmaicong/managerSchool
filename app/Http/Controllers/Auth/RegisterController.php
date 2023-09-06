<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $title = "Đăng ký tài khoản";
        return view('auth.register',compact('title'));
    }
    public function create(Request $request){
        dd($request->all());
    }

}
