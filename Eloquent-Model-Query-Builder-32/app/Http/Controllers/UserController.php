<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function queries(){
        // $respose=User::all();

        // $respose=User::get();

        // $respose=User::where('Phone','12345')->get();

        // $respose=User::first();

        // $respose=User::find(3);


        // $respose=[$respose];


        // $respose = User::insert([
        //     'Name'=>'Anju',
        //     'Email'=>'anju@gmail.com',
        //     'Phone'=>'01917',
        // ]);
        // if($respose){
        //     return "Insert Data";
        // }else{
        //     return "Data not insert";
        // }

        // $respose = User::where('name','Anju')->update(['phone'=>'01710458584']);
        // if($respose){
        //     return "Update Data";
        // }else{
        //     return "Data not update";
        // }

        $respose = User::where('name','Anju')->delete();
        if($respose){
            return "Delete Data";
        }else{
            return "Data not delete";
        }

        // return view('user',['users'=>$respose]);
    }
}
