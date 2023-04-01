<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\KategoriController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
 Route::get('/', [IndexController::class,'index']);

// ---produk-----
 Route::get('/produk', [ProducController::class,'index']);
 Route::get('/addproduk', [ProducController::class,'create']);
 Route::POST('/tambahproduk', [ProducController::class,'store']);
 Route::get('/view/edit/produk/{id}', [ProducController::class,'edit']);
 Route::put('edit/produk/{id}', [ProducController::class,'update']);
 Route::get('/delete/produk/{id}', [ProducController::class,'destroy']);

// ----kategori----
Route::get('/kategori', [KategoriController::class,'index']);
//  Route::get('/add', [KategoriController::class,'create']);
 Route::POST('/tambahkategori', [KategoriController::class,'store']);
 Route::get('/view/edit/kategori/{id}', [KategoriController::class,'edit']);
 Route::put('edit/kategori/{id}', [KategoriController::class,'update']);
 Route::get('/delete/kategori/{id}', [KategoriController::class,'destroy']);

//  Cart//
Route::get('/cart', [CartController::class,'index']);
Route::post('/addcart', [CartController::class,'store']);
Route::patch('/update/cart/{$id}', [CartController::class,'edit']);
Route::get('/delete/{$id}', [CartController::class,'delete']);


 