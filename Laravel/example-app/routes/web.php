<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post/{id?}', function (string $id = null) {

    if ($id) {
        return "<h1>Post Id = $id </h1>";
    } else {
        return "<h1>Post Id not found</h1>";
    }



})->where('id',"[0-9]+");




