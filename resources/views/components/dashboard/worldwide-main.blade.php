@props(['covidStatisticSum'])

<div class="py-10">
    <x-dashboard.worldwide-header />

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
