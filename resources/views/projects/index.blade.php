<x-app-layout>
    <x-nav />
    <x-page-name name="Alle Projecten" />

    {{-- @dump($projects) --}}

    @forelse ($projects as $project)
        @once


            <a href="{{ route('projects.show', $project->id) }}">
                Naam {{ $project->name }} <br />
                Beschrijving {{ $project->content }} <br />
            </a><br>
            Opdrachtgever's naam {{ $project->client?->name }} <br />

            @if ($project->client->id)
                <a href="{{ route('clients.show', $project->client->id) }}">Linkje naar Opdrachtgever</a><br>
            @endif

            @forelse ($project->images as $image)
                <!-- TODO: Slideshow for all connected images -->
                <img class="max-w-[250px] max-h-[250px]" src="storage/{{ $image->path }}" alt="image here" />
            @empty
                <!-- TODO: Leave 'No image found for this project' message here -->
            @endforelse
            <hr>


        @endonce
        @empty
            No project information found. At all.
        @endforelse

    </x-app-layout>
