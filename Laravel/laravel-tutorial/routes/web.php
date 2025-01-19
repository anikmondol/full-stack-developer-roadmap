<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/post/{id?}', function (string $id) {

//     if ($id) {
//         return "<h1> Post id: $id </h1>";
//     } else {
//         return "<h1> Data is not pass </h1>";
//     }
// })->whereNumber('id');


// Route::get('/post/{id?}', function (string $id) {

//     if ($id) {
//         return "<h1> Post id: $id </h1>";
//     } else {
//         return "<h1> Data is not pass </h1>";
//     }
// })->whereAlpha('id');

// Route::get('/post/{id?}', function (string $id) {

//     if ($id) {
//         return "<h1> Post id: $id </h1>";
//     } else {
//         return "<h1> Data is not pass </h1>";
//     }
// })->whereAlphaNumeric('id');

Route::get('/post/{id?}', function (string $id) {

    if ($id) {
        return "<h1> Post id: $id </h1>";
    } else {
        return "<h1> Data is not pass </h1>";
    }
})->where('id', '[0-9]+');
