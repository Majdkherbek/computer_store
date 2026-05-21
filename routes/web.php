<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
Route::get('/welcome/{category?}',[StaticController::class, 'welcome'] )->name('welcome');

Route::get('/contact',[StaticController::class, 'contact'] )->name('contact');

Route::get('/create',[StaticController::class, 'create'])->name('create');

Route::get('/computers',[StaticController::class, 'computer'])->name('computers');

Route::resource('com-docs',ComputerController::class);