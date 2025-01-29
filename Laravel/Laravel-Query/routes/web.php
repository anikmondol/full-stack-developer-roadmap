<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [StudentController::class,'showStudent'])->name("allStudents");
Route::get('/singleStudent/{id}', [StudentController::class,'singleStudent'])->name('singleStudent');
Route::post('/addStudent', [StudentController::class,'addStudent'])->name('addStudent');
Route::get('/updateStudent', [StudentController::class,'updateStudent'])->name('updateStudent');
Route::get('/deleteStudent/{id}', [StudentController::class,'deleteStudent'])->name('deleteStudent');
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::post('/studentsUpdate/{id}', [StudentController::class, 'update'])->name('studentsUpdate');
Route::view('new_Student', '/new_Student');

