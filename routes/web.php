<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginRegisterController;
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
Route::get('/login', function () {
    return view('auth/login');
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



route::get('/hairtreatment',function(){
    return view('product_page/product/hairtreatment');
});
route::get('/hairtreatment2',function(){
    return view('product_page/product/hairtreatment2');
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

Route::get('/contract', [ContractController::class , 'index']);
Route::post('/contract', [ContractController::class , 'store'])->name('contract.store');


// Auth::routes();
Route::get('/store/product', function () {
    return view('store');
});


/// Login&Register

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// ----rd

Route::get('addproduct', [ProductController::class, 'create']);
Route::post('addproduct', [ProductController::class, 'addproduct']);



Route::get('computer', [ProductController::class, 'showproduct']);


Route::get('search', [ProductController::class, 'search']);



Route::get('product/{id}', [ProductController::class, 'showitem']);

Route::get('add_to_cart/{id}', [ProductController::class, 'addtocart'])
->name('add_to_cart');

route::get('cart', [ProductController::class, 'cart'])
->name('cart');

Route::patch('update-cart', [ProductController::class, 'update'])
->name('update_cart');

Route::delete('remove-from-cart', [ProductController::class, 'remove'])
->name('remove_from_cart');

Route::get('addminproduct', [ProductController::class, 'addminproduct']);
route::view('navbra','navbra');

Route::get('Delete/{id}', [ProductController::class, 'Delete']);
