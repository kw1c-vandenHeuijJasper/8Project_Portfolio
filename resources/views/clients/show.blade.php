<x-app-layout>

    <x-page-name name="Opdrachtgever {{ $client->id }}" />
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="flex">
            <h2 class="mx-auto text-xl font-semibold text-gray-900 dark:text-white sm:text-4xl pb-[25px]">
                {{ $client->name }}
            </h2>
        </div>
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            @if (!$client->images->isEmpty())
                <div class="relative max-w-4xl mx-auto">
                    <div class="relative overflow-hidden">
                        <div class="slideshow-container">
                            @foreach ($client->images as $index => $image)
                                <div class="hidden mySlides fade min-h-[300px]">
                                    <div class="absolute top-0 left-0 p-2 text-sm text-white numbertext">
                                        {{ $index + 1 }} / {{ $image_count }}</div>
                                    <img src="{{ asset('storage/' . $image->path) }}"
                                        class="mx-auto resize-none object-contain   min-w-[500px] max-h-[250px] max-w-[968px]">
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
                    <!-- Dots for navigation -->
                    <div class="flex justify-center mt-4">
                        <span class="w-4 h-4 bg-gray-400 rounded-full cursor-pointer dot" onclick="currentSlide(1)">
                        </span>
                    </div>
            @endif

            <div>
                <div class="max-w-2xl mx-auto">
                    <p class="py-5 text-base font-normal text-center text-gray-500 dark:text-gray-400">
                        {{ $client->description }}
                    </p>
                    @if (!$client->projects->isEmpty())
                        <p class="py-8 text-base font-semibold text-gray-900 dark:text-white">Projects</p>

                        <ul
                            class="pl-4 space-y-4 text-base font-normal text-gray-500 list-disc list-outside dark:text-gray-400">
                            @forelse ($client->projects as $project)
                                <li>
                                    <a href="{{ route('projects') . '/' . $project->id }}">
                                        <span class="font-semibold text-gray-900 dark:text-white"> {{ $project->name }}
                                        </span> --
                                        <span class="text-gray-50"> {{ $project->content }}</span>
                                    </a>
                                </li>
                            @empty
                                No projects were found!
                            @endforelse
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
