<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('user', UserController::class);
Route::resource('comment', CommentController::class);
Route::resource('video', VideoController::class);

Route::resource('post', PostController::class);
// Route::resource('image', ImageController::class);
