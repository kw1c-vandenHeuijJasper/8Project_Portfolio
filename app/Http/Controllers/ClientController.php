<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with(['project', 'images'])->get();

        return view('/clients.index', ['clients' => $clients]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $image_count = $client->images->count();

        return view('clients.show', ['client' => $client, 'image_count' => $image_count]);
    }
}
