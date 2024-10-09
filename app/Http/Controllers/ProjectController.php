<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();
        $clients = Client::get();

        return view('/projects.index', [
            'projects' => $projects,
            'clients' => $clients
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $image_count = $project->images->count();
        return view('projects.show', ['project' => $project, 'image_count' => $image_count]);
    }
}
