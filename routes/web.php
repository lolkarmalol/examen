<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books/index', [BookController::class, 'index'])->name('books.index');
Route::get('books/Create', [BookController::class, 'Create']);
Route::post('books/store', [BookController::class, 'store'])->name('books.store');
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
