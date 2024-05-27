<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');

Route::get('/order/create/{product}', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
Route::put('/order/update/{order}', [OrderController::class, 'statusUpdate'])->name('order.update');


Auth::routes();

