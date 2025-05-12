<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");
