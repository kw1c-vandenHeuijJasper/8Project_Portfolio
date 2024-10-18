<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Quality;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $projects = Project::query()
            ->with(['client', 'images'])
            ->latest('id')
            ->limit(3)
            ->get();

        $qualities = Quality::get();
        // dd(Project::all()->toArray());

        $clients = Client::get();
        // dd($projects, $clients);

        return view('index', [
            'projects' => $projects,
            'clients' => $clients,
            'qualities' => $qualities,
        ]);
    }
}
