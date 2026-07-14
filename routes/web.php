<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BerandaController::class,'index'])
    ->name('beranda');


Route::get('/produk',[ProdukController::class,'index'])
    ->name('produk.index');


Route::get('/produk/{id}',[ProdukController::class,'show'])
    ->name('produk.show');


Route::get('/kategori/{slug}',[KategoriController::class,'index'])
    ->name('kategori.index');

    
Route::get('/tentang', function(){
    return view('tentang'); 
})->name('tentang');