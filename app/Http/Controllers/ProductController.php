<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Http\Controllers\products;
use Munna\ShoppingCart\Cart;

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
    return redirect('computer');
}

    
public function showproduct()
{
    $product=product::all();
   return view('showproduct',['product'=>$product]);
}

public function search(Request $request)
{
  $query = $request->input('search');
 

  $products = Product::where('name', 'LIKE', "%$query%")
                      ->orWhere('price', 'LIKE', "%$query%")
                      ->orWhere('description', 'LIKE', "%$query%")
                      ->orWhere('id', 'LIKE', "%$query%")
                      ->paginate(12);
                      $products->appends($request->all());
                
  return view('showproduct', ['product'=>$products, 'query'=>$query]);
}

    

public function showitem($id)
{
    $products=Product::find($id);
    return view('showitem',compact('products'));
}

public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
}
