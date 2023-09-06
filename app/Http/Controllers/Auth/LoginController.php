<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $title = "Đăng nhập";
        return view('auth.login',compact('title'));
    }
    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }else{
            return back()->withErrors([
                'email' => 'Thông tin đăng nhập không chính xác.',
            ]);
        }
    }
}
