<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function get(){
        return "Get request";
    }

    function post(){
        return "Post request";
    }

    function put(){
        return "Put request";
    }
}
