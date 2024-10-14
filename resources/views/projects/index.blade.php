<x-app-layout>
    <x-page-name name="Alle Projecten" />

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 ">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                {{-- <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    <!-- TODO Goede text hiervoor verzinnen --> Mijn Projecten
                </h2> --}}
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">
                    Hier zie je alle projecten die ik gemaakt heb. <br>
                    Hier kun je ook zien of het voor mij is gemaakt of voor een opdrachtgever. <br>
                    Klik op de naam van de opdrachtgever om al hun opdrachten te weergeven.
                </p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 ">
                @forelse ($projects as $project)

                    <div class="items-center rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">

                        <div>
                            @forelse ($project->images as $image)
                                @if ($loop->first)
                                    <img class="max-w-[250px] max-h-[250px] rounded-lg sm:rounded-none sm:rounded-l-lg"
                                        src="storage/{{ $image->path }}" alt="image here" />
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="{{ route('projects.show', $project->id) }}">
                                    {{ $project->name }} <br />
                            </h3>
                            <h3 class="float-right text-xs tracking-tight text-gray-900 dark:text-white">
                                Project # {{ $project->id }}
                            </h3>

                            @if ($project->client->id)
                                <a href="{{ route('clients.show', $project->client->id) }}">
                                    <span class="text-gray-500 dark:text-gray-400">
                                        {{ $project->client?->name }}
                                    </span>
                                </a><br>
                            @else
                                <span class="text-gray-500 dark:text-gray-400">
                                    Mijzelf
                                </span>
                            @endif
                            <a href="{{ route('projects.show', $project->id) }}">
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{ $project->content }}
                                </p>
                            </a>

                            <x-progress name="Completion" percentage="{{ $project->percentage }}" />
                            <ul class="flex space-x-4 sm:mt-0">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                        <svg class="w-5 h-5" fill="currentColor">
                                            {{-- <path fill-rule="evenodd"
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                clip-rule="evenodd" /> --}}
                                        </svg>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                @empty
                    <span class="text-black dark:text-white">Somehow no projects were found.</span>
                @endforelse
            </div>
        </div>
    </section>
</x-app-layout>
