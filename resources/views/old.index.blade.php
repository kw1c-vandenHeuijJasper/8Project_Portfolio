<!-- TODO: REVAMP HOME PAGE -->
<!--
    Available from controller:
    $projects
    $clients
-->
{{-- @dd($projects, $clients) --}}
<x-app-layout>


    <x-page-name name="Hoofdpagina" />

    <!--
        TODO: List of things on index page
        Welcome
        About me
        Qualities
        CV?
    -->

    <!-- Welcome name and study -->
    <div class="bg-slate-600">
        <!-- Welcome -->
        <div class="h-[65px]">
            <x-important-text content="Welkom!" />
        </div>
        <!-- Name and study -->
        <div class="flex h-auto px-5 text-gray-100 bg-sky-950">

            <div class="flex-1 py-5">
                <div class="pb-20">
                    <h2 class="float-right pr-32 text-xl font-medium text-right pt-11">
                        Jasper van den Heuij
                    </h2>
                </div>
                <div>
                    <h2 class="float-right pr-32 text-xl font-medium text-right pt-11">
                        Student Software Development
                    </h2>
                </div>
            </div>
            <div class="flex-1 py-5">
                <!-- TODO Find an image -->
                <!-- Image Placeholder -->
                <div class="flex items-center justify-center w-[65%] min-h-64  bg-gray-300 rounded  dark:bg-gray-700">
                    <svg class="w-[20%] h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- About me -->
    <div class="pb-10 bg-slate-600">
        <div class="h-fit">
            <x-important-text content="Over mij" />

            <div class="flex overflow-x-hidden text-center flex-direction-right">
                <div class="flex-1 px-40">
                    <div class="text-black rounded-lg bg-slate-400">
                        <!-- TODO about me -->

                        <!-- Lorem -->
                        <div class="py-8 overflow-y-hidden text-3xl">
                            <p>
                                Hoi, ik ben Jasper van den Heuij <br><br>
                                Ik ben 17 jaar oud en ik doe de opleiding software development op het Koning Willem 1
                                College in
                                Cuijk.<br>
                                Dit is mijn portfolio website
                            </p><br>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                Alias earum ad debitis autem hic impedit dignissimos molestias aliquam eos ipsum. <br>
                                Dignissimos est, autem quasi pariatur non eligendi adipisci cumque tempore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-black bg-slate-600">
        @forelse ($projects as $project)

            <a href="{{ route('projects.show', $project->id) }}">link to project</a><br>
            {{ $project->name }} <br />
            {{ $project->content }} <br />
            {{ $project->client?->name }} <br />

            @if ($project->client->id)
                <a href="{{ route('clients.show', $project->client->id) }}">link to client</a><br>
            @endif

            @forelse ($project->images as $image)
                @once
                    <img class="max-w-[250px] max-h-[250px]" src="storage/{{ $image->path }}" alt="image here" />
                @endonce
            @empty
                <!-- TODO: Leave 'No image found for this project' message here -->
            @endforelse
            <hr>
        @empty
            No project information found. At all.
        @endforelse
    </div>
    <!--
        TODO: index page project
        See latest 3 projects on this page as a show off, including what client its made for
        If you click on the project you will be taken to a page about the project
        If you click on the client you will be taken to a page where you can see everything about that client
    -->

    <!--
        TODO: Projects page
        Show off all made projects
        Project pictures and links to those projects (slideshows?)

        Under projects you see which client it was made for
        If you click on the project you will be taken to a page about the project (slideshow?)
        If you click on the client you will be taken to a page where you can see everything about that client
    -->

    <!--
        TODO: Clients page
        Show off all clients, and when you click on them you will see something about them
        and all projects they ordered.
    -->
</x-app-layout>
