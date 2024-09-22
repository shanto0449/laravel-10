<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "list of student";
    }


    function add(){
        return "add student list";
    }

    function delete(){
        return "delete student list";
    }

    function about($name){
        return $name;
    }
}
