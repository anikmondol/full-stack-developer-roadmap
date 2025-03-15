<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::resources('user', UserController::class);

Route::resource('user', UserController::class);

