<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register', 'register')->name('register');

Route::view('login', 'login')->name('login');

Route::post('/storeData', [UserController::class, 'storeData'])->name('storeData');

Route::post('/loginMatch', [UserController::class, 'loginMatch'])->name('loginMatch');

Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboardPage/inner', [UserController::class, 'innerPage'])->name('innerPage');
