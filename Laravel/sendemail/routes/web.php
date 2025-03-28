<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email',[EmailController::class,'sendEmail']);

Route::get('contact',[EmailController::class,'contactForm']);

Route::get('contact',[EmailController::class,'contactForm']);

Route::post('contact-store',[EmailController::class,'sendContactFormEmail'])->name('contact');
