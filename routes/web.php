<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/second', 'second');

Route::view('/', 'home')->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('article', 'article')->name('article');

Route::resource('categories', CategoryController::class);

require __DIR__ . '/auth.php';
