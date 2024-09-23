<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function queries(){
        $result =DB::table('users')->get();

        // $result =DB::table('users')->where('Phone','12345')->get();

        // $result =DB::table('users')->first();
        // $result=[$result];

        // $result=DB::table('users')->insert([
        //     'Name'=>'Hillol',
        //     'Email'=>'hillol@gmail.com',
        //     'Phone'=>'12345',
        // ]);

        // if($result){
        //     return "Data inserted";
        // }else{
        //     return "Data not inserted";
        // }


        // $result=DB::table('users')->where('Name','Hillol')->update(['Phone'=>'01710458584']);
        // if($result){
        //     return "Data update";
        // }else{
        //     return "Data not update";
        // }

        // $result=DB::table('users')->where('name','Hillol')->delete();

        // if($result){
        //     return "Data Delete";
        // }else{
        //     return "Data not delete";
        // }




        return view('users',['users'=>$result]);

    }
}
