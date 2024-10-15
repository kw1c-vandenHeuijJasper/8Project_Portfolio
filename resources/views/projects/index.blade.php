<x-app-layout>
    <x-page-name name="Alle Projecten" />

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 ">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
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
                            @if ($project->firstImage())
                                <img class="max-w-[250px] max-h-[250px] rounded-lg sm:rounded-none sm:rounded-l-lg"
                                    src="{{ asset('storage/' . $project->firstImage()->path) }}" alt="image here" />
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="{{ route('projects.show', $project) }}">
                                    {{ $project->name }} <br />
                            </h3>
                            <h3 class="float-right text-xs tracking-tight text-gray-900 dark:text-white">
                                Project #{{ $project->id }}
                            </h3>

                            <a href="{{ route('clients.show', $project->client) }}">
                                <span class="text-gray-500 dark:text-gray-400">
                                    {{ $project->client?->name }}
                                </span>
                            </a><br>

                            <a href="{{ route('projects.show', $project->id) }}">
                                <p @class([
                                    'min-w-[560px]' => !$project->firstImage(),
                                    'mt-3',
                                    'mb-4',
                                    'font-light',
                                    'text-gray-500',
                                    'dark:text-gray-400',
                                ])>
                                    {{ $project->content }}
                                </p>
                            </a>

                            <x-progress name="Completion" percentage="{{ $project->percentage }}" />

                        </div>
                    </div>
                @empty
                    <span class="text-black dark:text-white">Somehow no projects were found.</span>
                @endforelse
            </div>
        </div>
    </section>
</x-app-layout>
