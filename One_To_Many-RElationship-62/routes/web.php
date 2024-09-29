<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('product','product');

Route::post('product',[SellerController::class,'product']);

Route::view('seller','seller');
Route::post('seller',[SellerController::class,'seller']);

Route::get('list',[SellerController::class,'list']);

Route::get('many-rel',[SellerController::class,'manyRel']);

Route::get('many-one',[SellerController::class,'manyToOne']);
