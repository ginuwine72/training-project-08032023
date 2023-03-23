<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;

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