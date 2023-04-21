<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
   function addproduct(Request $req)
   {
    $product= new product;
    $product->image=$req->image;
    $product->name=$req->name;
    $product->price=$req->price;
    $product->description=$req->description;
    $product->save();
   }
   
}
