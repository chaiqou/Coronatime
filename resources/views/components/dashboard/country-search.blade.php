<form action="" method="GET">
    <div class="flex space-x-4 w-full md:space-x-8 md:max-w-7xl mx-auto">

        <label for="search" class="sr-only">Search</label>

        <div class="relative flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 absolute pointer-events-none" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>


            <input type="search" name="search" id="search" value="{{ request('search') }}"
                class="pr-16 pl-14 px-4 max-w-6xl mx-auto font-semibold  border-2 h-12 shadow-sm sm:text-sm border-gray-300 rounded-md"
                placeholder="{{ __('message.search_by_country') }}">
        </div>
        </input>

    </div>
</form>

{{-- <div class="relative bg-red-500 p-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-6 absolute left-0 ml-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    <input class="ml-6" type="text" placeholder="{{ __('message.search_by_country') }}">
</div> --}}
