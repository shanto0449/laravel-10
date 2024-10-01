<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function list(){
        return Student::all();
    }

    function addStudent(Request $request){
       $student= new Student();
       $student->name=$request->name;
       $student->email=$request->email;
       $student->phone=$request->phone;

       if($student->save()){
        return "Add Student";
       }else{
        return "Fail";
       }
    }
}
