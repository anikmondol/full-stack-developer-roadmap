<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('image', ImageController::class);
