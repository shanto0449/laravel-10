<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about');
Route::view('home','home');
Route::view ('login','login');
Route::view('admin','admin');
