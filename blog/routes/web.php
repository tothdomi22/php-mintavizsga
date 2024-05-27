<?php

use App\Http\Controllers\PostController;
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



Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/show/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::post('/post/delete/{post}', [PostController::class, 'destroy'])->name('post.delete');
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/update/{post}', [PostController::class, 'update'])->name('post.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
