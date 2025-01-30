<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/addStudent', [StudentController::class,'addStudent'])->name('addStudent');




