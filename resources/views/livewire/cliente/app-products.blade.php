<div>
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

                            <div class="p-4">
                                <div class="flex flex-col items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-2xl font-semibold">Frijol Negro</h2>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 ">Kilogramo</p>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-center text-2xl font-bold  text-green-600 mt-2">$ 30.00  MXN</p>
                                {{-- <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                    </div>
                                </div> --}}
                                <div class="flex items-center justify-between py-4">
                                    <button>

                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endwhile





            </div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        </div>
    </div>



    {{-- modal --}}
    <div class="  fixed w-full h-screen top-0 left-0 ">



       <div class="bg-black opacity-50 h-screen w-full absolute z-10">

        </div>

        <div class="bg-white relative opacity-100 z-20 w-1/2 mx-auto mt-8 sm:mt-24 lg:mt-32 xl:mt-64">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde in hic, alias sit incidunt porro sint consequatur repellat exercitationem ex, quo explicabo quas! Voluptatibus expedita sequi voluptatum esse autem dolore.
        </div>

    </div>
</div>

