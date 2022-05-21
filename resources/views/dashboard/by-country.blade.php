<x-layout>

    <x-dashboard.navbar />

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900 mb-8">
                    {{ __('message.statistics_by_country') }}</h1>

                <a href="/dashboard" class="text-md mr-4 leading-tight text-gray-900" aria-current="page">
                    {{ __('message.worldwide') }}
                </a>
                <a href="/by-country" class="text-md font-bold leading-tight text-gray-900 border-b-4  border-b-black"
                    aria-current="page">
                    {{ __('message.by_country') }}
                </a>
            </div>
        </header>
    </div>
    </div>





    {{-- Search --}}
    <form action="" method="GET">
        <div class="flex lg:space-x-32 ">

            <label for="search" class="sr-only">Search</label>

            <div class="relative flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 absolute pointer-events-none" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>


                <input type="search" name="search" id="search" value="{{ request('search') }}"
                    class="pr-16 pl-14 px-4 max-w-6xl mx-auto font-semibold  border-2 h-12 shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="{{ __('message.search_by_country') }}">
            </div>
            </input>

        </div>
    </form>





    {{-- TABLE --}}
    <div class="px-4 max-w-7xl  mx-auto overflow-y-auto scroll-smooth sm:px-6 lg:px-8 h-96">

        <div class="mt-8 flex flex-col ">
            <div class="-my-2 -mx-4  sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                    <div class="shadow ring-1  ring-black ring-opacity-5 md:rounded-lg">
                        <table class="w-full divide-y divide-gray-300 ">
                            <thead class="bg-[#F6F6F7]">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">

                                        {{ __('message.location') }}

                                        <span>
                                            <a href="{{ URL::current() . '?sort=name_desc' }}"
                                                class="cursor-pointer">&darr;</a>
                                            <a href="{{ URL::current() . '?sort=name_asc' }}"
                                                class="cursor-pointer">&uarr;</a>

                                        </span>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('message.new_cases') }}
                                        <a href="{{ URL::current() . '?sort=confirmed_asc' }}">&darr;</a>
                                        <a href="{{ URL::current() . '?sort=confirmed_desc' }}">&uarr;</a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('message.deaths') }}
                                        <a href="{{ URL::current() . '?sort=deaths_asc' }}">&darr;</a>
                                        <a href="{{ URL::current() . '?sort=deaths_desc' }}">&uarr;</a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('message.recovered') }}
                                        <a href="{{ URL::current() . '?sort=recovered_asc' }}">&darr;</a>
                                        <a href="{{ URL::current() . '?sort=recovered_desc' }}">&uarr;</a>
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ __('message.worldwide') }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $covidStatisticSum['confirmed'] }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $covidStatisticSum['deaths'] }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $covidStatisticSum['recovered'] }}
                                    </td>

                                </tr>

                                @foreach ($countries as $country)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ $country->name }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $country->confirmed }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $country->deaths }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $country->recovered }}


                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('#menu-btn')
            const dropdown = document.querySelector('#dropdown')

            menuBtn.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
                dropdown.classList.toggle('flex');
            })
        })
    </script>
</x-layout>
