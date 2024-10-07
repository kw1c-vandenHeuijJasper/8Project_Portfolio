<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('filament.pages.index');
})->name('/');



Route::get('/test', function () {});
