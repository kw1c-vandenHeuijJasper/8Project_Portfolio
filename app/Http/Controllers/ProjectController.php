<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['client', 'images', 'tasks'])->get();

        return view('/projects.index', ['projects' => $projects]);
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
