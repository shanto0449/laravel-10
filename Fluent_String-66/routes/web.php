<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;



// $info=Str::ucfirst($info);
// $info = Str::replaceFirst('Hi', 'Hello', $info);

// $info=Str::camel($info);

$info="hi , lest's lean laravel";

$info=Str::of($info)
->ucfirst($info)
->replaceFirst('Hi', 'Hello', $info)
->camel($info);

echo $info;

Route::get('/', function () {
    return view('welcome');
});
