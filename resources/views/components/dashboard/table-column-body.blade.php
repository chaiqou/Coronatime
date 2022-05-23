<tbody class="divide-y divide-gray-200 bg-white">
    @if (!request('search'))
        <tr>
            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                {{ __('message.worldwide') }}</td>
            <td class="whitespace-nowrap px-1 py-4 text-sm text-gray-500">
                {{ $covidStatisticSum['confirmed'] }}
            </td>
            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ $covidStatisticSum['deaths'] }}</td>
            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ $covidStatisticSum['recovered'] }}
            </td>

        </tr>
    @endif

    @foreach ($countries as $country)
        <tr>
            <td
                class="whitespace-nowrap pl-4 @if (request('search')) py-8 @endif mt-3 flex text-sm font-medium text-gray-900 sm:pl-6">
                {{ app()->getLocale() == 'en' ? $country->name : $country->name_geo }}
            </td>
            <td class="whitespace-nowrap px-3 items-center py-4 text-sm text-gray-500">
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
