<x-app-layout>
    <x-page-name name="Project {{ $project->id }}" />
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="flex">
            <h2 class="mx-auto text-xl font-semibold text-gray-900 dark:text-white sm:text-4xl pb-[25px]">
                {{ $project->name }}
            </h2>
        </div>
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            @if (!$project->images->isEmpty())
                @php
                    $dot_visible = true;
                @endphp
                <div class="relative max-w-4xl mx-auto">
                    <div class="relative overflow-hidden">
                        <div class="slideshow-container">
                            @foreach ($project->images as $index => $image)
                                <div class="hidden mySlides fade min-h-[300px]">
                                    <div class="absolute top-0 left-0 p-2 text-sm text-white numbertext">
                                        {{ $index + 1 }} / {{ $image_count }}</div>
                                    <img src="{{ asset('storage/' . $image->path) }}"
                                        class="mx-auto resize-none object-contain   min-w-[500px] max-h-[250px] max-w-[968px]">
                                    <div
                                        class="absolute bottom-0 w-full p-2 text-base text-center text-white bg-black bg-opacity-50">
                                        <!-- TODO remove debug info -->
                                        Debug: <br>{{ $image }}
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


                    <!-- Dots for navigation -->
                    @if ($dot_visible = true)
                        <div class="flex justify-center mt-4">
                            <span class="w-4 h-4 bg-gray-400 rounded-full cursor-pointer dot"
                                onclick="currentSlide(1)"></span>
                        </div>
                    @endif

                </div>
            @endif




            <div class="max-w-5xl mx-auto">
                <div class="max-w-2xl mx-auto space-y-6">
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        {{ $project->content }}
                    </p>
                    @if (!$project->task->isEmpty())
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Tasks</p>

                        <ul
                            class="pl-4 space-y-4 text-base font-normal text-gray-500 list-disc list-outside dark:text-gray-400">
                            @forelse ($project->task as $task)
                                <li>
                                    <span class="font-semibold text-gray-900 dark:text-white"> {{ $task->name }}
                                    </span> --
                                    <span class="font-bold text-gray-50"> {{ $task->status }}</span>
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
