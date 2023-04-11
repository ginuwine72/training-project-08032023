<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function show(){
        $product=product::all();
        return view('product',['Product'=>$product]);
    }

   
    
}
