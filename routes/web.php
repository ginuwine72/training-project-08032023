<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;

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
//login-regis page
Route::get('/definedyouselfas',function(){
    return view('whatyouwanttobe');
});
Route::get('/definedyouself',function(){
    return view('youare');
});

route::get('/userregister',function(){
    return view('register/userregister');
});
route::get('/ownerregister',function(){
    return view('register/ownerregister');
});

//contoller for register (User)

Route::get('/userregister', [UserRegisterController::class, 'showRegistrationForm']);
Route::post('/userregister', [UserRegisterController::class, 'userregister']);



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

Auth::routes();
Route::get('/store/product', function () {
    return view('store');
});
