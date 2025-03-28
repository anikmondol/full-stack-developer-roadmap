<?php

use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', function () {
    return view('user');
})->name('user');


Route::view('register', 'register')->name('register');

Route::view('login', 'login')->name('login');

Route::post('/storeData', [UserController::class, 'storeData'])->name('storeData');

Route::post('/loginMatch', [UserController::class, 'loginMatch'])->name('loginMatch');

// Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage')->middleware('can:isAdmin');

Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage');

Route::get('/dashboardPage/inner', [UserController::class, 'innerPage'])->name('innerPage');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');

Route::get('/post/{id}', [UserController::class, 'post'])->name('post');



Route::get('/single-post/{id}', [UserController::class, 'updatePost'])->name('post.update');





























// Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage')->middleware(['auth', 'IsUserValid:admin']);

// Route::get('/dashboardPage/inner', [UserController::class, 'innerPage'])->name('innerPage')->middleware(['auth', 'IsUserValid:admin']);

// Route::middleware(['IsUserValid', TestUser::class])->group(function () {
//     Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage');

//     Route::get('/dashboardPage/inner', [UserController::class, 'innerPage'])->name('innerPage');
// });

// Route::middleware(['ok-user'])->group(function () {
//     Route::get('/dashboardPage', [UserController::class, 'dashboardPage'])->name('dashboardPage');

//     Route::get('/dashboardPage/inner', [UserController::class, 'innerPage'])->name('innerPage')->withoutMiddleware(TestUser::class);
// });



