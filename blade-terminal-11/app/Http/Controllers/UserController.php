<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminat\Support\Facades\View;

class UserController extends Controller
{
    function UserHome(){
        $name="Shanto";
        $user=["Shanto","Fahim","Mainul"];
        return view('home',["name"=>$name, "user"=>$user]);
    }
}
