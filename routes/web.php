<?php

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

Route::get('/book', \App\Http\Controllers\Books\IndexController::class)
    ->name('book.index');
Route::post('/book/create', \App\Http\Controllers\Book\CreateController::class)
    ->name('book.create');
