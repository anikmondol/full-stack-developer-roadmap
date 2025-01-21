<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/post', function () {
    return view('post');
});


Route::get('/test1', function () {
    return view('test');
});



