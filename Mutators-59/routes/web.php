<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[StudentController::class,'list']);

Route::get('save',[StudentController::class,'save']);
