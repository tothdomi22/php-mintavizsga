<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
