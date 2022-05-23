@props(['covidStatisticSum'])

<div class="py-10">
    <x-dashboard.worldwide-header />
    <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 py-8 sm:px-0">
                <div class="rounded-lg h-96">
                    <div>
                        <dl class="mt-5  grid grid-cols-1 gap-5 md:grid-cols-3 grid-cols-4 ">
                            <div
                                class=" px-4 py-5 h-[200px] flex flex-col items-center space-y-2 bg-indigo-100 bg-white shadow rounded-lg overflow-hidden sm:p-6 md:col-span-1 col-span-full">
                                <x-svg.blue-vector />
                                <dt class="text-sm font-medium text-gray-900 font-extrabold">
                                    {{ __('message.new_cases') }}
                                </dt>
                                <dd class="mt-1 text-3xl font-extrabold text-[#2029F3]">
                                    {{ $covidStatisticSum['confirmed'] }}
                                </dd>
                            </div>

                            <div
                                class="px-4  py-5 h-[200px] flex flex-col items-center space-y-4 bg-green-100 bg-white shadow rounded-lg overflow-hidden sm:p-6 md:col-span-1 col-start-1 col-end-3 ">
                                <x-svg.green-vector />
                                <dt class="text-sm font-medium text-gray-900 font-extrabold truncate">
                                    {{ __('message.recovered') }}
                                </dt>
                                <dd class="mt-1 text-3xl  font-extrabold text-[#0FBA68]">
                                    {{ $covidStatisticSum['recovered'] }}
                                </dd>
                            </div>

                            <div
                                class="px-4 py-5 h-[200px] flex flex-col items-center space-y-4 bg-yellow-100 bg-white shadow rounded-lg overflow-hidden sm:p-6 md:col-span-1 col-start-3 col-end-5  ">
                                <x-svg.yellow-vector />
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
