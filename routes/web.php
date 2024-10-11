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

Route::get('/test', function () {

    // $project = Project::get();
    // dd(Project::class->percentage()->toArray());
    // Project::get()->each(function ($project) {

    //     $max_points = $project->tasks->count() * 2;

    //     $points = $project->tasks->map(function ($task) {
    //         $task['points'] = $task->status->getPoints();
    //         return $task;
    //     })->sum('points');

    //     $percentage = ($points / $max_points) * 100;

    //     dump([
    //         $points . '/' . $max_points,
    //         (int) $percentage
    //     ]);
    // });
});

// Used for slideshow testing
// Route::view('test', 'test');
