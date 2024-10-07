<!--
    Available from controller:
    $projects
    $clients
-->
{{-- @dd($projects, $clients) --}}
<x-app-layout>
    <x-nav />

    <!--
        TODO:   Automatic page name
                Inside a component?
                <!x-page-name name="Hoofdpagina" /> for example
    -->
    <div class="border-y-2 border-slate-800 h-14 bg-slate-600">
        <h1 class="pt-1 font-bold text-4xl text-gray-100 text-center align-text-vertical">
            Hoofdpagina
        </h1>
    </div>



    <!--
        TODO: List of things on index page
        Welcome
        About me
        CV?
    -->
    <!-- Welcome name and study -->
    <div class="bg-slate-600">
        <!-- Welcome -->
        <div class="h-[65px]">
            <h1 class="text-gray-100 text-center text-4xl font-sans pt-3 border-1 border-black">
                Welkom!
            </h1>
        </div>
        <!-- Name and study -->
        <div class="flex bg-sky-950 h-auto text-gray-100 px-5">

            <div class="flex-1 py-5">
                <div class="pb-20">
                    <h2 class="font-medium text-xl float-right pr-32 pt-11  text-right">
                        Jasper van den Heuij
                    </h2>
                </div>
                <div>
                    <h2 class="font-medium text-xl float-right pr-32 pt-11  text-right">
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
    <div class="bg-slate-600">
        <div class="min-h-64 h-max">
            <!-- TODO: Component-ize this
            This is also used in the welcome section with the same styling -->
            <h1 class="text-gray-100 text-center text-4xl font-sans pt-3 border-1 border-black pb-6">
                Over mij
            </h1>
            <!--
                max-w-[160px]
                h-[160px]
            -->
            <div class="flex flex-row text-center flex-direction-right ">
                <div class="flex-1 font-bold text-black bg-slate-400 rounded-lg shrink-0 max-w-[160px] h-[160px] ">
                    Test item
                </div>
            </div>
        </div>
    </div>
    <!--
        Over mij

        Hoi, ik ben Jasper van den Heuij <br>
        Ik ben 17 jaar oud en ik doe de opleiding software development op het Koning Willem 1 College in
        Cuijk.<br>
        Dit is mijn portfolio website
    -->

    <!--
        TODO: Projects on index page
        Project pictures and links to those projects (slideshow?)

        Under projects you see which client it was made for
        If you click on the project you will be taken to a page about the project
        If you click on the client you will be taken to a page where you can see everything about that client
    -->
</x-app-layout>
