<div class="px-4 max-w-7xl mx-auto overflow-y-auto scroll-smooth sm:px-6 lg:px-8 h-96">

    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4  sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="shadow ring-1  ring-black ring-opacity-5 md:rounded-lg">
                    <table class="w-full  divide-y divide-gray-300">
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
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
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
