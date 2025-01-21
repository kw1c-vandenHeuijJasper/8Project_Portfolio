<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\Quality;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): View {
    $projects = Project::with([
        'client',
        'images',
    ])
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

    $qualities = Quality::get();

    return view('index', [
        'projects' => $projects,
        'qualities' => $qualities,
    ]);
})->name('/');

//FIXME!! cant upload images !!

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
