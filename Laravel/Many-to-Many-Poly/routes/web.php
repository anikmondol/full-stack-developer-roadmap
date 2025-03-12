<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('post', PostController::class);

Route::resource('video', VideoController::class);

Route::resource('tag', TagController::class);

Route::resource('test', TestController::class);
