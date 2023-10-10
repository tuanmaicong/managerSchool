<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $title = "Tin tức";
        $data = News::query()->orderByDesc('id')->paginate(3);
        return view('website.pages.new.index',compact('title','data'));
    }
    public function detail($id){
        $model = News::query()->findOrFail($id);
        $title = $model->subject;
        return view('website.pages.new.detail',compact('title','model'));
    }
}
