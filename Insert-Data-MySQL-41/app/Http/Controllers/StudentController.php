<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add(Request $request){
        // return $request->input();

        $student=new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            return   redirect('list');
        }else{
            echo "Faild Add Student";
        }
        // return "add function";
    }

    function list(){
        $studentData=Student::all();
        return view('list-student',['students'=>$studentData]);
    }

    function delete($id){
        $isDeleted=Student::destroy($id);
        if($isDeleted){
         return   redirect('list');
        }
    }


}
