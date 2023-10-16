<?php

use App\Http\Controllers\TodoController;
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
Route::get('/', [TodoController::class, 'index'])->name('todos');

Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todos-show');

Route::post('/todos', [TodoController::class, 'store'])->name('todos-create');

Route::patch('/todos/{id}', [TodoController::class, 'update'])->name('todos-edit');

Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todos-destroy');
