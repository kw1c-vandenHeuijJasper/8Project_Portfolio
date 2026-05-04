<x-app-layout>
    <x-page-name name="Home" />

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Hallo, <br> <span class="text-3xl font-bold">Ik ben Jasper van den Heuij.</span>
                </h1>
                <p class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Student Software Development - Leerjaar 3
                </p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <!-- TODO IMAGE HERE -->
                <img src="https://placehold.co/442x331" alt="Image goes here">
            </div>
        </div>
    </section>

    <div class="max-w-2xl mx-auto pb-[70px]">
        <h2
            class="text-3xl font-extrabold leading-tight tracking-tight text-center text-gray-900 sm:text-4xl dark:text-white">
            Over mij
        </h2>
        <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
            Hoi, ik ben Jasper van den Heuij en ik studeer Software Development op het Koning Willem 1
            College in Cuijk en zit nu in leerjaar 3.
            Ik ben 19 jaar oud en ben zeer geintereseerd in de <span class="font-bold">software</span> wereld.
            Ik vind <span class="font-bold">hardware</span> ook heel interessant. <br />
            In de software is de <span class="font-bold">backend</span> mijn interesse.
            <br><br>
            Deze website is gemaakt in <span class="font-bold">Laravel</span>, <span
                class="font-bold">FilamentPHP</span> en <span class="font-bold">TailwindCSS</span>. <br>
            Wil je meer over mij of mijn website weten? Stuur mij gerust een mailtje naar
            <a href="mailto:jasperictwebsite@gmail.com"
                class="text-blue-500 hover:cursor-pointer hover:underline">jasperictwebsite@gmail.com</a> !
        </p>
    </div>

    <div class="max-w-[600px] mx-auto text-center">
        <div class="w-full">
            <h2
                class="pb-10 text-3xl font-bold leading-tight tracking-normal text-gray-900 w-max sm:text-4xl dark:text-white">
                Kwaliteiten
            </h2>
        </div>
        @forelse ($qualities as $quality)
            <x-progress name="{{ $quality->name }}" percentage="{{ $quality->percentage }}" />
        @empty
            <span class="text-black dark:text-white">Geen kwaliteiten gevonden in de database.</span>
        @endforelse
    </div>

    <section class="bg-white dark:bg-gray-900 ">
        <div class="max-w-screen-xl px-4 py-8 mx-auto border sm:py-16 lg:px-6 border-x-gray-800 border-y-gray-900">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Ervaring</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Opleiding</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Software Development</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">September 2023 - heden</p>
                    <p class="text-gray-500 dark:text-gray-400">Koning Willem 1 College - Cuijk</p>
                </div>

                <div class="px-8 border border-x-gray-800 border-y-gray-900">
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">VMBO TG/GL</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">2021 - 2023</p>
                    <p class="text-gray-500 dark:text-gray-400">Metameer Stevensbeek</p>
                </div>

                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">HAVO/VWO</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">2019 - 2021</p>
                    <p class="text-gray-500 dark:text-gray-400">Metameer Stevensbeek</p>
                </div>
            </div>
        </div>

        <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-2 w-[70%]" />

        <div class="max-w-screen-xl px-4 py-8 mx-auto border sm:py-16 lg:px-6 border-x-gray-800 border-y-gray-900">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    Werkervaring
                </h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400"></p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            stroke-width="0.5" stroke="currentColor"
                            class="text-primary-600 dark:text-primary-300 size-6 lg:w-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                        </svg>

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Stage WoutICT</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Januari 2026 - heden</p>
                    <p class="text-gray-500 dark:text-gray-400">Wanroij</p>
                </div>
                <div class="px-8 border border-x-gray-800 border-y-gray-900">
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary-600 dark:text-primary-300 lg:w-8"
                            fill="currentColor" viewBox="-3 0 28 28" stroke-width="0.5" stroke="currentColor"
                            class="size-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Supermarkten</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Juni 2023 - heden</p>
                    <p class="text-gray-500 dark:text-gray-400">Diverse supermarkten</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            stroke-width="0.5" stroke="currentColor"
                            class="text-primary-600 dark:text-primary-300 size-6 lg:w-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                        </svg>

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Stage WoutICT</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">September 2024 - Februari 2025</p>
                    <p class="text-gray-500 dark:text-gray-400">Wanroij</p>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-12 antialiased bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
            <div class="max-w-2xl mx-auto text-center">
                <h2
                    class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Recente projecten
                </h2>
                <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                    Dit zijn de 3 meest recente projecten
                </p>
            </div>

            <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                @forelse ($projects as $project)
                    <div class="space-y-4">
                        <a href="{{ route('clients') . '/' . $project->client->id }}">
                            <span
                                class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $project->client->name }}
                            </span>
                        </a>
                        <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ route('projects') . '/' . $project->id }}">
                                {{ $project->name }}
                            </a>
                        </h3>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                            {{ $project->content }}
                        </p>
                        <a href="{{ route('projects') . '/' . $project->id }}"
                            class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button">
                            Ga naar project
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                @empty
                    <span class="text-black dark:text-white">No recent projects found</span>
                @endforelse
            </div>
        </div>
    </section>
</x-app-layout>
