<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/success-stories', function () {
    return view('success-stories');
});

Route::get('/manufacturing', function () {
    return view('manufacturing');
});

Route::get('/mining-oil-gas', function () {
    return view('mining-oil-gas');
});

Route::get('/smart-farming', function () {
    return view('smart-farming');
});