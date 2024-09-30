<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaileController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('send-email',[MaileController::class,'sendEmail']);
Route::view('send-email','send-email');
