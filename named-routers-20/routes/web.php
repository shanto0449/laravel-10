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

Route::view('home/profile/user','home')->name('hm');
Route::view('home/profile/{name}','home')->name('user');

Route::get('show',[HomeController::class,'show']);
Route::get('user',[HomeController::class,'user']);
