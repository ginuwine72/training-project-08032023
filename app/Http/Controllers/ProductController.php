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
    return redirect('showproduct');
}

    
public function showproduct()
{
    $product=product::paginate(6);
   return view('showproduct',['product'=>$product]);
}

public function search(Request $request)
{
  $query = $request->input('search');
 

  $products = Product::where('name', 'LIKE', "%$query%")
                      ->orWhere('price', 'LIKE', "%$query%")
                      ->orWhere('description', 'LIKE', "%$query%")
                      ->paginate(7);
                      $products->appends($request->all());
                
  return view('showproduct', ['product'=>$products, 'query'=>$query]);
}




}
