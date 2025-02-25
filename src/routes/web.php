<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher.index');
});

require __DIR__.'/auth.php';
