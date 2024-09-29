<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function list(){
        return Student::all();
    }

    function save(){
        $student = new Student();
        $student->name="brouce";

        $student->email="brouce@test.com";
        $student->phone="111111";

        if($student->save()){
            echo "Add new";

        }else{
            echo "arrer";
        }


    }
}
