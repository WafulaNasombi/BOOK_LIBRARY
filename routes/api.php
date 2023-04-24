<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{id}', [BookController::class, 'show'])->name('bookid.show');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::put('/book/{id}', [BookController::class, 'update'])->name('book.update');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/author/{id}', [AuthorController::class, 'show'])->name('authorid.show');
Route::post('/authors', [AuthorController::class, 'store'])->name('author.store');
Route::put('/author/{id}', [AuthorController::class, 'update'])->name('author.update');




