<x-app-layout>


<div>
    <div class="max-w-2xl mx-auto mt-2">

        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Arroz, Frijol, Bulto ..." required>
                <button type="submit" class="text-white absolute right-1.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>

    <div tabindex="0" class="focus:outline-none">
        <!-- Remove py-8 -->
        <div class="mx-auto container py-8">
            <div class="flex flex-wrap items-center lg:justify-between justify-center">
                <!-- Card 1 -->

                @php
                    $i = 0;
                @endphp
                @while ($i < 20)
                @php
                    $i++;
                @endphp
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8 border rounded-lg">
                    <div>
                        <img alt="person capturing an image" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap (1).png" tabindex="0" class="focus:outline-none w-full h-44 rounded-t-lg" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone XS</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>
                                <div class="pl-2">
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-4">
                                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endwhile


        </div>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
</div>


</x-app-layout>
