<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
   public function contact () {
    return view('contact');
}

 public function create () {
    return view('create');
}

 public function computer () {
    return view('computers');
}

public function welcome ($category=null) {
    if(isset($category)){
        //return '<h1>'.$category.'</h1>';
        return "<h1>{$category}</h1>";
    }
    return view('index');
}
}
