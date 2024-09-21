<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',

        ]);

        return $request;

    }
}
