<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class,'index']);

Route::get('/storeSession', [TestController::class,'storeSession']);

Route::get('/deleteSession', [TestController::class,'deleteSession']);


