<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
  function upload(Request $request){
    $path=$request->file('file')->store('public');
    $pathArray = explode("/",$path);
    $imgPath=$pathArray[1];
    $img= new Image();
    $img -> path=$imgPath;

    if($img->save()){
        return redirect('list');
    }else{
        return "Errer !";
    }


  }

  function list(){
    $images =Image::all();
    return view('display',['imgData'=>$images]);
  }
}
