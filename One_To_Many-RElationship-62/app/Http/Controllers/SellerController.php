<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Seller;


class SellerController extends Controller
{
    function product(Request $request){

    $product=new Product();
     $product->name=$request->name;
     $product->price=$request->price;
     $product->seller_id=$request->seller_id;
     $product->save();

     return redirect('product');

    }

    function seller(Request $request){
        $seller = new Seller;

        $seller->name=$request->name;
        $seller->save();
        return redirect('seller');

    }
 //one to one
    function list(){
        return Seller::find(1)->ProductData;

    }
//one to many
    function manyRel(){
        return seller::find(1)->ProductMany;
    }

    //Many to One

    function manyToOne(){
        // return "many to one";
        $data = Product::with('seller')->get();
        return $data;



    }
}
