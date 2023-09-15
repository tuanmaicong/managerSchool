<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        $title = "Đăng ký tài khoản";
        $roles = Role::query()->get();
        return view('auth.register',compact('title','roles'));
    }
    public function create(RegisterRequest $request){
        if ($request->get('password_confirmation') !== $request->get('password')){
            return back()->withErrors(['password_confirmation' => 'Mật khẩu không khớp.']);
        }elseif ($request->role_id == 0){
            return back()->withErrors(['role_id' => 'Mời chọn vai trò của bạn.']);
        }
        try {
            $model = User::query()->create($request->all());
            $model->save();
            event(new UserRegistered($request->email));
            return redirect()->route('login')->with('msg','Đăng ký tài khoản thành công!');
        }catch (\Exception $exception){
            return back()->withErrors('errors','Đăng ký không thành công!');
        }
    }

}
