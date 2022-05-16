{{-- <x-layout>
    <form action="/logout" method="POST">
        @csrf
        <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">Log Out user</button>
    </form>

</x-layout> --}}
<x-layout>
    {{-- <div class="space-y-auto">
        <form class="flex justify-end" action="/logout" method="POST">
            @csrf
            <button
                class="inline-flex items-center px-4 py-2 mr-8 mt-2 border-l border-gray-300   text-sm font-medium text-gray-900 bg-white "
                type="submit">Log Out</button>
        </form>




    </div>


    <div class="space-y-auto flex flex-col">

        <div class="space-y-12 pb-4 border-b border-gray-200 ">
            <img class="h-10 ml-32 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">

            <h2 class="text-2xl ml-32  font-sans font-extrabold">Worldwide Statistics</h2>
            <div class="space-x-12 ">
                <a href="#"
                    class="border-black-900 ml-32  text-black-600 whitespace-nowrap p-4  border-b-4 border-b-black font-medium text-sm"
                    aria-current="page"> Worldwide </a>
                <a href="#"
                    class="border-black-900 ml-40  text-black-900 whitespace-nowrap p-4  border-b-4 border-b-black font-medium text-sm"
                    aria-current="page"> Worldwide </a>

            </div>


        </div>
    </div>

    class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75" --}}


    <header>
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between lg:border-b border-gray-500 lg:border-none">
                <div class="flex items-center">
                    <a href="/dashboard">
                        <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
                    </a>

                </div>
                <div class="ml-10 space-x-4">


                    <a class="inline-block inline-flex bg-white py-2 px-4  text-base  ">English
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
                <h1 class="text-3xl font-bold leading-tight text-gray-900 mb-8">Worldwide</h1>
                <a href="#" class="text-md mr-4 font-bold leading-tight text-gray-900 border-b-4 border-b-black"
                    aria-current="page">
                    Worldwide
                </a>
                <a href="#" class="text-md leading-tight text-gray-900" aria-current="page"> By Country
                </a>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-8 sm:px-0">
                    <div class="rounded-lg h-96">
                        <div>

                            <dl class="mt-5  grid grid-cols-1 gap-5 sm:grid-cols-3">
                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-blue-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img src="{{ asset('images/vector3.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">New Cases</dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">750,000</dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-green-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-6" src="{{ asset('images/vector.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold truncate">Recovered
                                    </dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">72,320</dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-yellow-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-4" src="{{ asset('images/vector2.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">Death</dt>
                                    <dd class="mt-1 text-3xl font-semibold text-gray-900">750,000</dd>
                                </div>
                            </dl>
                        </div>


                    </div>

                </div>
        </main>
    </div>
    </div>

</x-layout>
