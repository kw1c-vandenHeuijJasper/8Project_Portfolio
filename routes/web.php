<?php

use App\Status;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('/');
// Route::get('/old', HomeController::class)->name('/old');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

// Route::get(
//     '/test',
//     [\App\Http\Controllers\TestController::class, 'test']
// );
Route::get('/test', function () {
    Project::get()->each(fn($project) => dump($project->percentage));
});

// Used for slideshow testing
// Route::view('test', 'test');
