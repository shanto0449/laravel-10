<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploadFile(Request $request){
        // $path=$request->file('file')->store('public');

        $path=$request->file('file')->storeAs('public','dummy1.png');

         $fileNameArray=explode("/" , $path);
         $fileName=$fileNameArray[1];


        return view('display',['path'=>$fileName]);
        // echo "Uploade Function Call";
    }

}
