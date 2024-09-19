<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserNamme;
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

Route::view('/home','home');
Route::view('/about','about');

Route::get('user-home',[UserNamme::class,'userHome']);
Route::get('user-about/{name}',[UserNamme::class,'userAbout']);
Route::get('admin-login',[UserNamme::class,'adminLogin']);
