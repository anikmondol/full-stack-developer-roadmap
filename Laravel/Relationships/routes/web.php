<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GovernorController;
use App\Http\Controllers\NewsUsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::resource('contact', ContactController::class);

Route::resource('newsUsers', NewsUsersController::class);

Route::resource('posts', PostController::class);

Route::resource('governors', GovernorController::class);

Route::resource('roles', RoleController::class);
