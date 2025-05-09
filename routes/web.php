<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', function () {
    return view('second');
});

//more simple route
Route::view('/second', 'second');
