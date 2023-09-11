<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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



//!ROTTE PUBLICHE

Route::get('/', [ProductController::class,'welcome'])->name('welcome');

Route::post('/product/store', [ProductController::class,'store'])->name('product.store');

Route::get('/product/index',[ProductController::class,'index'])->name('product.index');

Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');





//! ROTTE AMMINISTRAZIONE


Route::middleware(['is.admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');

    Route::post('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');

    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

    Route::delete('/product/delete/{product}',[ProductController::class,'destroy'])->name('product.delete');
});
