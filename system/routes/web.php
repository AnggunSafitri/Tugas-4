<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;


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

Route::get('/', [AdminController::class, 'index']);

Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('store/kategori', [KategoriController::class, 'store']);
Route::get('kategori/show/{id}', [KategoriController::class, 'show']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('kategori/update/{kategori}', [KategoriController::class, 'update']);
Route::get('kategori/delete/{kategori}', [KategoriController::class, 'destroy']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('store/produk', [ProdukController::class, 'store']);
Route::get('produk/show/{produk}', [ProdukController::class, 'show']);
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('produk/update/{produk}', [ProdukController::class, 'update']);
Route::get('produk/delete/{produk}', [ProdukController::class, 'destroy']);
