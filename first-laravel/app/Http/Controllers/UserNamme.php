<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserNamme extends Controller
{
    function userHome(){
        return view('home');
    }

    function userAbout($name){
        return view('about',['user'=>$name]);
    }


    function adminLogin(){
        if(view::exists('admin.login')){
            return view('admin.login');
        }else{
            echo "No view found";
        }

    }
}
