<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "THPT Mỹ Đức B";
        $data = News::query()->orderByDesc('id')->limit(3)->get();
        return view('index',compact('title','data'));
    }
}
