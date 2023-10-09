<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "THPT Mỹ Đức B";
        return view('index',compact('title'));
    }
}
