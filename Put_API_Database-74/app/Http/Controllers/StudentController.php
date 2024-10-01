<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  function updateStudent(Request $request){
    // return "Update Student";
//put method
     $student=Student::find($request->id);
     $student->name=$request->name;
     $student->email=$request->email;
     $student->phone=$request->phone;

     if($student->save()){
        return ["Result"=>"Update Student"];
     }else{
        ["Result"=>"Fail"];
     }
  }

//delete method
function deleteStudent($id){
     $student = Student::destroy($id);

     if($student){
        return ["Return"=>"Delete Student"];
     }else{
        return ["Rsult"=>"Fail"];
     }
}

}
