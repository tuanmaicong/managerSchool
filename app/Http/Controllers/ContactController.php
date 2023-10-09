<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class ContactController extends Controller
{
    public function index(){
        $title = "Liên hệ";
        return view('website.pages.contact',compact('title'));
    }
    public function postContact(ContactRequest $request){
        try {
            $model = new Contacts();
            $model->fill($request->all());
            $model->save();
            Session::flash('success','Liên hệ đã được gửi đi thành công!');
            return back();
        }catch (Exception $exception){
            Session::flash('error','Gửi không thành công!');
            return back();
        }
    }
}
