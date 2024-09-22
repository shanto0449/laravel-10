<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('student/home','home');

// Route::get('student/show',[HomeController::class,'show']);

// Route::get('student/add',[HomeController::class,'add']);

Route::prefix('student')->group(function(){

    Route::view('/home','home');
    Route::get('/show',[HomeController::class,'show']);
    Route::get('/add',[HomeController::class,'add']);
});

//or

Route::prefix('student/bangladesh')->group(function(){

    Route::view('/home','home');
    Route::get('/show',[HomeController::class,'show']);
    Route::get('/add',[HomeController::class,'add']);
});
