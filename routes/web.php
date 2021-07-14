<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\ItemController;

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

Route::get('/', [CakeController::class, 'welcome'])->name('welcome');
Route::get('/gallery',[CakeController::class,'gallery'])->name('gallery');

Route::get('/item/create',[ItemController::class,'create'])->middleware('auth');
Route::post('/item',[ItemController::class,'store'])->middleware('auth');
Route::get('/item',[ItemController::class,'show'])->middleware('auth');
Route::delete('/item/delete/{id}', [ItemController::class,'destroy'])->middleware('auth');

Route::get('/cake/create',[CakeController::class,'create']);
Route::post('/cake', [CakeController::class,'store']);
Route::get('/cake/details/{orderid}',[CakeController::class,'details']);
Route::get('/cake/history',[CakeController::class,'history'])->middleware('auth');
Route::get('/cake/index',[CakeController::class,'index'])->middleware('auth');
Route::post('/cake/completed/{orderid}',[CakeController::class,'update'])->middleware('auth');
Route::get('/cake/bill/{orderid}',[CakeController::class,'bill'])->middleware('auth');





Auth::routes();
    

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
