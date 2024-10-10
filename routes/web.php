<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('/');
Route::get('/old', HomeController::class)->name('/old');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

// Route::get('/test', function () {});

// Used for slideshow testing
Route::view('test', 'test');
