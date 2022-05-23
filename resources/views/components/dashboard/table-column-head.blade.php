<thead class="bg-[#F6F6F7] ">
    <tr>
        <x-dashboard.table-column>
            {{ __('message.location') }}
            <div class="items-center inline-block">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=name_asc' }}">
                    <x-svg.table-arrow-up request="{{ Request::get('sort') == 'name_asc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=name_desc' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('sort') == 'name_desc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>

        <x-dashboard.table-column>

            {{ __('message.new_cases') }}


            <div class="items-center inline-block">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=confirmed_desc' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('sort') == 'confirmed_desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=confirmed_asc' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('sort') == 'confirmed_asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>

        <x-dashboard.table-column>
            {{ __('message.deaths') }}
            <div class="items-center inline-block">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=deaths_desc' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('sort') == 'deaths_desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=deaths_asc' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('sort') == 'deaths_asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>

        <x-dashboard.table-column>
            {{ __('message.recovered') }}
            <div class="items-center inline-block">
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=recovered_desc' }}">
                    <x-svg.table-arrow-up
                        request="{{ Request::get('sort') == 'recovered_desc' ? 'black' : '#BFC0C4' }}" />
                </a>
                <a class="cursor-pointer" href="{{ URL::current() . '?sort=recovered_asc' }}">
                    <x-svg.table-arrow-down
                        request="{{ Request::get('sort') == 'recovered_asc' ? 'black' : '#BFC0C4' }}" />
                </a>
            </div>
        </x-dashboard.table-column>
    </tr>
</thead>
