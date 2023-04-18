<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
route::get('/dashboard',function(){
    return view('dashboard');
});
route::get('/store',function(){
    return view('store');
});
route::get('/cart',function(){
    return view('cart');
});

route::get('/hairtreatment',function(){
    return view('product_page/product/hairtreatment');
});
route::get('/shoes1',function(){
    return view('product_page/product/shoes1');
});
route::get('/rug1',function(){
    return view('product_page/product/rug1');
});
route::get('/decoration',function(){
    return view('product_page/product/decoration');
});
route::get('/watch',function(){
    return view('product_page/product/watch');
});
route::get('/shoes2',function(){
    return view('product_page/product/shoes2');
});
route::get('/cream',function(){
    return view('product_page/product/cream');
});
route::get('/laptop',function(){
    return view('product_page/product/laptop');
});
route::get('/decoration2',function(){
    return view('product_page/product/decoration2');
});
route::get('/skincare',function(){
    return view('product_page/product/skincare');
});
route::get('/joygame',function(){
    return view('product_page/product/joygame');
});
route::get('/bagpack',function(){
    return view('product_page/product/bagpack');
});
// สำหรับทำ สไลด์รูปภาพ //
// Route::get('/carousel', function () {
//     return view('carousel');
// });


// Route::get('/contract',[contractController::class,'contract']);
// Route::post('/contract',[contractController::class,'store']);

// {
//     Route::get('/',[contractController::class,'index'])->name('index');
//     Route::get('/create',[contractController::class,'create'])->name('create');
//     Route::post('/store',[contractController::class,'store'])->name('store');

// }
// Route::get('/contract', function () {
//     return view('cont');
// })->name('contract');
// Routes::resource('/contract')
Route::get('/contract', [ContractController::class , 'index']);
Route::post('/contract', [ContractController::class , 'store'])->name('contract.store');

// Route::post('/contract',function(){
//     dd(1);
//     return view('dashboard');
// })->name('contract.store');

Route::post('/cart/add', [ShoppingCartController::class, 'addItem']);
Route::post('/cart/remove', [ShoppingCartController::class, 'removeItem']);
Route::post('/cart/update', [ShoppingCartController::class, 'updateQuantity']);
Route::get('/cart', [ShoppingCartController::class, 'showCart']);


Route::get('/store/product', function () {
    return view('store') . '<h4  class="m-0" style="font-size: 30px ;font-weight: bold;"><span style="color:#d4001a">Our</span> Products</h4>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>';
});

// ----

Route::get('addproduct', [ProductController::class, 'create']);
Route::post('adddatafromproduct', [ProductController::class, 'addproduct']);



// Route::view('showproduct','showproduct'); 
Route::get('adddatafromproduct', [ProductController::class, 'showproduct']);
Route::get('search', [ProductController::class, 'search']);






