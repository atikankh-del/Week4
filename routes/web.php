<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', [AdminController::class, 'about'])->name('about');

Route::get('/blog', [AdminController::class, 'blog'])->name('blog');

Route::get('/form', [AdminController::class, 'form'])->name('form');

Route::get('/books', [BookController::class, 'index'])->name('book');

Route::post('/books', [BookController::class, 'store'])->name('book.store');