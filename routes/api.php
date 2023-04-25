<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/book/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::put('/book/{id}', [BookController::class, 'update'])->name('books.update');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/author/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::put('/author/{id}', [AuthorController::class, 'update'])->name('authors.update');



