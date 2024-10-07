<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('/');
// Route::get('/projects', ProjectController::class)->name('projects');
// Route::get('/clients', ClientController::class)->name('clients');

Route::get('/test', function () {});
