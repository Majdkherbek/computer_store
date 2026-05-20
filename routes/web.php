<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome/{category?}', function ($category=null) {
    if(isset($category)){
        //return '<h1>'.$category.'</h1>';
        return "<h1>{$category}</h1>";
    }
    return view('index');
})->name('welcome');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/create', function () {
    return view('create');
})->name('create');


Route::get('/computers', function () {
    return view('computers');
})->name('computers');