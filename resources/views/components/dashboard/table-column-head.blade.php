<thead class="bg-[#F6F6F7]">
    <tr>
        <th scope="col" class="md:px-6 px-3 py-3.5  text-left text-sm font-semibold text-gray-900">

            {{ __('message.location') }}

            <span class="items-center md:inline-block ">
                <a href="{{ URL::current() . '?sort=asc&name=name' }}" class="cursor-pointer">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('name') == 'name' && Request::get('sort') == 'asc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=desc&name=name' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('name') == 'name' && Request::get('sort') == 'desc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </span>

        </th>

        <x-dashboard.table-column>
            {{ __('message.new_cases') }}
            <div class="items-center md:inline-block ">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=desc&name=confirmed' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('name') == 'confirmed' && Request::get('sort') == 'desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=asc&name=confirmed' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('name') == 'confirmed' && Request::get('sort') == 'asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>

        <x-dashboard.table-column>
            {{ __('message.deaths') }}
            <div class="items-center md:inline-block ">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=desc&name=deaths' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('name') == 'deaths' && Request::get('sort') == 'desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=asc&name=deaths' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('name') == 'deaths' && Request::get('sort') == 'asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>

        <x-dashboard.table-column>
            {{ __('message.recovered') }}
            <div class="items-center md:inline-block  ">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=desc&name=recovered' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('name') == 'recovered' && Request::get('sort') == 'desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=asc&name=recovered' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('name') == 'recovered' && Request::get('sort') == 'asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>
    </tr>
</thead>
