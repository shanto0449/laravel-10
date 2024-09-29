<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    // function add(Request $request){
    //     // return redirect('add');

    //     $seller = new Seller();
    //     $seller-> name=$request->name;
    //     $seller->price=$request->price;
    //     $seller->seller_id=$request->seller_id;
    //     $seller->save();

    // }

    // function product(Request $request){
    //     $product=new Product();
    //     $product->name=$request->name;
    //     $product->save();

    // }

    function list(){
        return Product::find(2)->SellerData;
    }


}
