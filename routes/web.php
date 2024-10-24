<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;

Route::get('/', HomeController::class)->name('/');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

Route::get('/test', function () {
    // dd('Nothing yet! 😭');



    // $total_count = \App\Models\Client::get()->first()->projects->first()->tasks()->count();
    // $completed_count = \App\Models\Client::get()->first()->projects->first()->tasks()->where('status', \App\Enums\TaskStatus::DONE)->count();
    // (int)$percentage = (int)$completed_count / (int)$total_count * (int)100;
    // dd(
    //     (int)$percentage
    // );


    // $total_count = \App\Models\Client::get()->first()->projects->tasks()->count();
    // $completed_count = \App\Models\Client::get()->first()->projects->first()->percentage;
    // (int)$percentage = ((int)$completed_count / (int)$total_count) * (int)100;
    // dd(
    //     $total_count,
    //     $completed_count,

    //     $total_count / $completed_count * 100,

    //     $percentage
    // );
});

// TODO Remove test page
// Route::view('test', 'test');


/**
 * RGB color in db
 * Via color picker and if you did not choose a color 
 * generate a random color with observer and put that in db
 * Of course display this in charts
 */
