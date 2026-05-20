<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
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