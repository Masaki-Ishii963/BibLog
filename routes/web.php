<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Book
Route::get('/book', \App\Http\Controllers\Book\IndexController::class)
    ->name('book.index');
Route::post('/create', \App\Http\Controllers\Book\CreateController::class)
    ->name('book.create');
Route::get('/update/{id}', \App\Http\Controllers\Book\Update\IndexController::class)
    ->name('book.update.index');
Route::put('/update/{id}', \App\Http\Controllers\Book\Update\PutController::class)
    ->name('book.update.put');
Route::delete('/delete/{id}', \App\Http\Controllers\Book\DeleteController::class)
    ->name('book.delete');

// Laravel Breezeで自動生成されたルーティング
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
