<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class RegisterController extends Controller
{
    public function index(){
        $title = "Đăng ký tài khoản";
        $roles = Role::query()->get();
        return view('auth.register',compact('title','roles'));
    }
    public function create(RegisterRequest $request){
        if ($request->get('password_confirmation') !== $request->get('password')){
            return back()->withErrors(['password_confirmation' => 'The password confirmation does not match.']);
        }
        try {
            $model = User::query()->create($request->all());
            return redirect()->route('login');
        }catch (\Exception $exception){
            return back()->withErrors('errors','Đăng ký không thành công!');
        }
    }

}
