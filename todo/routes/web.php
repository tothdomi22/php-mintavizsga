<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ function () {
    return view('welcome');
}]);

Route::get('/home', [function (){ return view('home');}])->middleware('auth');

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index')->middleware('auth');
Route::get('tasks/create', [TaskController::class, 'create'])->name('task.create')->middleware('auth');
Route::post('/tasks/store',[TaskController::class, 'store'])->name('task.store')->middleware('auth');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task.edit')->middleware('auth');
Route::put('/tasks/{task}/update', [TaskController::class, 'update'])->name('task.update')->middleware('auth');
Route::post('/task/{task}/delete', [TaskController::class, 'destroy'])->name('task.destroy')->middleware('auth');
Route::put('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('task.complete')->middleware('auth');


Route::auth();

