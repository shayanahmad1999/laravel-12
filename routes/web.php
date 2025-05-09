<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/second', function () {
    return view('second');
});

//more simple route
Route::view('/second', 'second');

Route::view('/', 'home')->name('home');
Route::view('blog', 'blog')->name('blog');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('article', 'article')->name('article');
