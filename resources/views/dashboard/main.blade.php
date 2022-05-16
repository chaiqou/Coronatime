<x-layout>

    <header>
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between lg:border-b border-gray-500 lg:border-none">
                <div class="flex items-center">
                    <a href="/dashboard">
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
                <h1 class="text-3xl font-bold leading-tight text-gray-900 mb-8">Worldwide Statistics</h1>
                <a href="/dashboard"
                    class="text-md mr-4 font-bold leading-tight text-gray-900 border-b-4 border-b-black"
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
                                    class=" px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-indigo-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img src="{{ asset('images/vector3.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">New Cases</dt>
                                    <dd class="mt-1 text-3xl font-extrabold text-[#2029F3]">750,000</dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-green-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-6" src="{{ asset('images/vector.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold truncate">Recovered
                                    </dt>
                                    <dd class="mt-1 text-3xl  font-extrabold text-[#0FBA68]">750,000</dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-yellow-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-4" src="{{ asset('images/vector2.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">Death</dt>
                                    <dd class="mt-1 text-3xl  font-extrabold text-[#EAD621]">750,000</dd>
                                </div>
                            </dl>
                        </div>


                    </div>

                </div>
        </main>
    </div>
    </div>

</x-layout>
