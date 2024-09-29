<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-selles');

Route::view('product','product');

Route::post('add',[SellerController::class,'add']);
Route::post('product',[SellerController::class,'product']);

Route::get('list',[SellerController::class,'list']);

