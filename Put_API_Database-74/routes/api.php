<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::put('update-student',[StudentController::class,'updateStudent']);


Route::delete('student-delete/{id}', [StudentController::class,'deleteStudent']);
