<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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
    //testing
    return;
    // $clients = \App\Models\Client::get();
    // foreach ($clients as $client) {
    //     dump($client->projectCount());
    // }
    // dd(
    //     \App\Models\Client::with(
    //         ['project']
    //     )
    //         ->where('projectCount', 5)
    //         ->get()

    // );
});

// Route::view('test', 'test');
