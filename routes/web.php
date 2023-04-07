<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\User;


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
Route::get('/dashboard', function () {
    return view('home');
});


// Route::any('/adddata', [MemberController::class, 'adddata']);


Route::get('edit/{id}', [MemberController::class, 'showdata']);
Route::POST('edit', [MemberController::class, 'update']);



Route::get('datauser',[MemberController::class,'DataTableIndex']);   //หน้าตรางผู้ใช้
Route::delete('delete/{id}', [MemberController::class, 'delete']); //iconลบ 

Route::get('search', [MemberController::class, 'search']); //ค้นหาข้อมูล




//เข้าหน้าloginก่อนเข้าหน้านี่

Route::middleware(['auth'])->group(function () {
    Route::get('/adddata', function () {
    return view('adddata');
    });
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
        return view('home');
        });
        });    
        //
        Route::view('adddata','adddata');

        
        
