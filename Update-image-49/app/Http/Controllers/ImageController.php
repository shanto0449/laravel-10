<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
//   function upload(Request $request){
//     $path=$request->file('file')->store('public');
//     $pathArray = explode("/",$path);
//     $imgPath=$pathArray[1];
//     $img= new Image();
//     $img -> path=$imgPath;

//     if($img->save()){
//         return redirect('list');
//     }else{
//         return "Errer !";
//     }


//   }

public function upload(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'file' => 'required', // validation rules
    ]);

    // Store the file in the 'public' disk, which stores it in storage/app/public
    $path = $request->file('file')->store('images', 'public'); // You can specify a folder like 'images'

    // Store the path relative to the storage/app/public
    $img = new Image();
    $img->path = $path; // The full path is now stored, e.g., 'images/example.jpg'

    // Save the image path to the database
    if ($img->save()) {
        return redirect('list')->with('success', 'Image uploaded successfully!');
    } else {
        return back()->withErrors('Error! Image upload failed.');
    }
}


  function list(){
    $images =Image::all();
    return view('display',['imgData'=>$images]);
  }
}
