<thead class="bg-[#F6F6F7] relative">
    <tr>
        <th scope="col" class="px-6 py-3.5 text-left  text-sm font-semibold text-gray-900">
            {{ __('message.location') }}
            <div class="items-center inline-block">

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=name_asc' }}">
                    <svg width="10" height="8" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0.5L10 5.5L0 5.5L5 0.5Z"
                            fill="{{ Request::get('sort') == 'name_asc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=name_desc' }}">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5.5L0 0.5H10L5 5.5Z"
                            fill="{{ Request::get('sort') == 'name_desc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col" class="px-3 py-3.5 text-left inline-block text-sm font-semibold text-gray-900">
            {{ __('message.new_cases') }}
            <div class="items-center inline-block">

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=confirmed_desc' }}">
                    <svg width="10" height="8" viewBox="0 0 10 6" fill="" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0.5L10 5.5L0 5.5L5 0.5Z"
                            fill="{{ Request::get('sort') == 'confirmed_desc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=confirmed_asc' }}">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5.5L0 0.5H10L5 5.5Z"
                            fill="{{ Request::get('sort') == 'confirmed_asc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col" class="px-3 py-3.5 text-left  text-sm font-semibold text-gray-900">
            {{ __('message.deaths') }}
            <div class="items-center inline-block">

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=deaths_desc' }}">
                    <svg width="10" height="8" viewBox="0 0 10 6" fill="" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0.5L10 5.5L0 5.5L5 0.5Z"
                            fill="{{ Request::get('sort') == 'deaths_desc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=deaths_asc' }}">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5.5L0 0.5H10L5 5.5Z"
                            fill="{{ Request::get('sort') == 'deaths_asc' ? 'black' : '#BFC0C4' }}" /> />
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col" class="px-3 py-3.5 text-left  text-sm font-semibold text-gray-900">
            {{ __('message.recovered') }}
            <div class="items-center inline-block">

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=recovered_desc' }}">
                    <svg width="10" height="8" viewBox="0 0 10 6" fill="" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0.5L10 5.5L0 5.5L5 0.5Z"
                            fill="{{ Request::get('sort') == 'recovered_desc' ? 'black' : '#BFC0C4' }}" />

                    </svg>
                </a>

                <a class="cursor-pointer" href="{{ URL::current() . '?sort=recovered_asc' }}">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5.5L0 0.5H10L5 5.5Z"
                            fill="{{ Request::get('sort') == 'recovered_asc' ? 'black' : '#BFC0C4' }}" />
                    </svg>
                </a>
            </div>
        </th>
    </tr>
</thead>
