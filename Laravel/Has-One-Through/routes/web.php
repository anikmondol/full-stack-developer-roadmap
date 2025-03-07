<?php

use App\Http\Controllers\CountrieController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user',UserController::class);

Route::resource('countries',CountrieController::class);

Route::resource('posts',PostController::class);

// Route::resource('orders',OrderController::class);

// Route::resource('customers',CustomerController::class);
