<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('books', BookController::class)->only(['index','show']);

// Route::post('/books', [BookController::class, 'index'])->name('books.index');

// Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');


Route::resource('books.reviews', ReviewController::class)->scoped(['review'=> 'book'])->only(['create','store']);

