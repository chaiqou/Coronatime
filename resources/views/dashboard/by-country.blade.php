<x-layout>

    <header>
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between lg:border-b border-gray-500 lg:border-none">
                <div class="flex items-center">
                    <a href="/by-country">
                        <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
                    </a>

                </div>
                <div class="ml-10 space-x-4">


                    <a class="inline-block inline-flex shrink-0 bg-white py-2 px-4  text-base  ">English
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <a
                        class="inline-block bg-white py-2 px-4  text-base font-medium ">{{ auth()->user()->username }}.</a>

                    <a class="inline-block bg-white lg:border-l py-2 px-4 text-base font-bold ">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>

                    </a>

                </div>
            </div>

        </nav>
    </header>

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900 mb-8">Statistics by country</h1>

                <a href="/dashboard" class="text-md mr-4 leading-tight text-gray-900" aria-current="page"> Worldwide
                </a>
                <a href="/by-country" class="text-md font-bold leading-tight text-gray-900 border-b-4  border-b-black"
                    aria-current="page">
                    By Country
                </a>
            </div>



        </header>




    </div>
    </div>





    {{-- Search --}}
    <form action="" method="GET">
        <div class="flex lg:space-x-64 ">

            <label for="search" class="sr-only">Search</label>

            <div class="relative flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 absolute pointer-events-none" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>


                <input type="search" name="search" id="search" value="{{ request('search') }}"
                    class="pr-3 pl-10 px-4 max-w-2xl mx-auto font-semibold  border-2 h-[48px] shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="Search by country">
            </div>
            </input>

        </div>
    </form>





    {{-- TABLE --}}
    <div class="px-4 max-w-7xl mx-auto overflow-y-auto sm:px-6 lg:px-8 h-96">

        <div class="mt-8 flex flex-col ">
            <div class="-my-2 -mx-4  sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                    <div class="shadow ring-1  ring-black ring-opacity-5 md:rounded-lg">
                        <table class="w-full divide-y divide-gray-300 ">
                            <thead class="bg-[#F6F6F7]">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Location</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        New Cases</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Deaths</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Recovered</th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        Worldwide</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $worldwide['confirmed'] }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $worldwide['deaths'] }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $worldwide['recovered'] }}
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



</x-layout>
