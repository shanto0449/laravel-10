<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
function UserHome(){
    return view('home');
}
function UserAbout(){
    return view('about');
}

}
