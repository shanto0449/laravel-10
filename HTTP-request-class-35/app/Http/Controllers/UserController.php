<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request){
        echo "Request method is " . $request->method();
        echo "<br>";
        echo "Request path is " . $request->path();
        echo "<br>";
        echo "Request URL is " . $request->url();
        echo "<br>";
        echo "Name is " . $request->input('name');

        if($request->isMethod('post')){
            echo "Execute code for post request";
        }else{
            echo "Execute code for post request";
        }
    }

}
