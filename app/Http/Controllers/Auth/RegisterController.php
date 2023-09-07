<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegister;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Listeners\SendUserRegistrationEmail;
use App\Mail\WelcomeEmail;
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
            $users = User::all();
            $message = [
              'name' => $request->get('name'),
            ];
            SendUserRegistrationEmail::dispatch($message,$users)->delay(now()->addMinute(1));
            return redirect()->route('login');
        }catch (\Exception $exception){
            return back()->withErrors('errors','Đăng ký không thành công!');
        }
    }

}
