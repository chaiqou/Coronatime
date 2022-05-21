<x-layout>



    <x-dashboard.navbar />

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900 mb-8">{{ __('message.welcome') }}</h1>
                <a href="/dashboard" class="text-md mr-4 font-bold leading-tight text-gray-900 border-b-4 border-b-black"
                    aria-current="page">
                    {{ __('message.worldwide') }}
                </a>
                <a href="/by-country" class="text-md leading-tight text-gray-900" aria-current="page">
                    {{ __('message.by_country') }}
                </a>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="px-4 py-8 sm:px-0">
                    <div class="rounded-lg h-96">
                        <div>

                            <dl class="mt-5  grid grid-cols-1 gap-5 sm:grid-cols-3">
                                <div
                                    class=" px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-indigo-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img src="{{ asset('images/vector3.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">
                                        {{ __('message.new_cases') }}

                                    </dt>
                                    <dd class="mt-1 text-3xl font-extrabold text-[#2029F3]">
                                        {{ $covidStatisticSum['confirmed'] }}
                                    </dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-green-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-6" src="{{ asset('images/vector.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold truncate">
                                        {{ __('message.recovered') }}
                                    </dt>
                                    <dd class="mt-1 text-3xl  font-extrabold text-[#0FBA68]">
                                        {{ $covidStatisticSum['recovered'] }}
                                    </dd>
                                </div>

                                <div
                                    class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-yellow-100 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                                    <img class="mb-4" src="{{ asset('images/vector2.png') }}" alt="">
                                    <dt class="text-sm font-medium text-gray-900 font-extrabold ">
                                        {{ __('message.deaths') }}</dt>
                                    <dd class="mt-1 text-3xl  font-extrabold text-[#EAD621]">
                                        {{ $covidStatisticSum['deaths'] }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
        </main>
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
