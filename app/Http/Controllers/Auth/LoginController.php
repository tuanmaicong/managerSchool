<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        //Auth::attempt kiểm tra email va password xem có khớp với cơ sở dữ liệu
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            // intended để điều hướng về trang dashboard hoặc về trang định truy cập ban đầu
            return redirect()->intended('admin');
        } else {
            // Đăng nhập thất bại
            return back()->withErrors([
                'email' => 'Thông tin đăng nhập không chính xác.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        \request()->session()->invalidate();

        \request()->session()->regenerateToken();

        return redirect('/');
    }
}
