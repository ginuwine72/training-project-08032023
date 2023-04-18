<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Http\Controllers\products;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function create()
{
    return view('addproduct');
}

public function addproduct(Request $request)
{
    $product= new product;

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move(public_path('product'), $filename);
        $product->image = $filename;

    } else {
        $product->image = '';
    }

    $product->save();
    return view('welcome');
}

    
public function showproduct()
{
    $product=product::all();
   return view('showproduct',['product'=>$product]);
}





}
