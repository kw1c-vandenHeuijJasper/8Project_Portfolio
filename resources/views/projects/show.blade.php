<x-app-layout>
    <x-page-name name="Project {{ $project->id }}" />

    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="flex">
            <h2 class="mx-auto text-center text-xl font-semibold text-gray-900 dark:text-white sm:text-4xl pb-[25px]">
                {{ $project->name }} <br> <span class="font-normal">gemaakt voor</span> <br> <a
                    href="{{ route('clients') . '/' . $project->client->id }}">{{ $project->client->name }}</a><br>
                <span class="text-xl text-gray-400">
                    {{ $project->start_date }} - {{ $project->end_date }}
                </span>
            </h2>
        </div>
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            @if ($project->images->isNotEmpty())
                <div class="relative max-w-4xl mx-auto">
                    <div class="relative overflow-hidden">
                        <div class="slideshow-container">
                            @foreach ($project->images as $index => $image)
                                <div class="hidden mySlides fade min-h-[300px]">
                                    <div class="absolute top-0 left-0 p-2 text-sm text-white numbertext">
                                        {{ $index + 1 }} / {{ $image_count }}</div>
                                    <img src="{{ asset('storage/' . $image->path) }}"
                                        class="mx-auto resize-none object-contain min-w-[500px] max-h-[250px] max-w-[968px]">
                                    <div
                                        class="absolute bottom-0 w-full text-base text-center text-white bg-black bg-opacity-50">
                                    </div>
                                </div>
                            @endforeach

                            <!-- Navigation buttons -->
                            <a class="absolute left-0 p-4 text-lg font-bold text-white transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer prev top-1/2 hover:bg-opacity-75"
                                onclick="plusSlides(-1)">❮</a>
                            <a class="absolute right-0 p-4 text-lg font-bold text-white transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer next top-1/2 hover:bg-opacity-75"
                                onclick="plusSlides(1)">❯</a>
                        </div>
                    </div>

                    <!-- Dot for navigation -->
                    <div class="flex justify-center mt-4">
                        <span class="w-4 h-4 bg-gray-400 rounded-full cursor-pointer dot"
                            onclick="currentSlide(1)"></span>
                    </div>
                </div>
            @endif

            <div class="max-w-5xl mx-auto">
                <div class="max-w-2xl mx-auto space-y-6">
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        {{ $project->content }}
                    </p>
                    @if ($project->tasks->isNotEmpty())
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Tasks</p>
                        <x-progress name="Total Completion Percentage" percentage="{{ $project->percentage }}" />

                        <ul
                            class="pl-4 space-y-4 text-base font-normal text-gray-500 list-disc list-outside dark:text-gray-400">
                            @forelse ($project->tasks as $task)
                                <li>
                                    <span class="font-semibold text-gray-900 dark:text-white">
                                        {{ $task->name }}
                                    </span>
                                    ---
                                    <span
                                        class="font-bold text-gray-50">{{ $task->status->getLabel($locale = 'nl') }}</span>
                                    {{ $task->content }}
                                </li>
                            @empty
                                No tasks were found!
                            @endforelse
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
