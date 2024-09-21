<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
        $request->validate([
            'username'=>'required | min:6 | max:12',
            'useremail'=>'required | email',
            'userpassword'=>'required | min:6',

        ],[
            'username.required'=>'username can not be empty',
            'username.min'=>'username min characters should be 3',
            'username.max'=>'user max characters limit is 12',
            'email.email'=>'this email is not valid',
        ]);
        return $request;
    }
}
