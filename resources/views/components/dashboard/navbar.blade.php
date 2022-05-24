<x-layout>
    <nav class="max-w-7xl mx-auto bg-white p-8 md:flex md:items-center md:justify-between space-y-4">
        <div class="flex justify-between items-center">
            <span>
                <a href="{{ $path }}">
                    <img class="h-10 w-auto inline" src="{{ asset('images/logo.png') }}" alt="Workflow">
                </a>

            </span>

            <div class="ml-6 my-4 md:my-0 mb-4 md:hidden " x-data="{ show: false }" @click.away="show = false">
                <x-dashboard.language-dropdown />
            </div>
            <x-dashboard.dropdown />

        </div>

        <ul
            class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full
            left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0">


            <div class="mx-4 my-6 md:my-0 mb-4" x-data="{ show: false }" @click.away="show = false">
                <x-dashboard.language-dropdown />
            </div>

            <li class="mx-4  my-6 md:my-0">
                <a href=" {{ route('locale.setting', 'en') }}"
                    class="text-lg font-extrabold ">{{ auth()->user()->username }}.</a>
            </li>
            <li class="mx-4  my-6 md:my-0">
                <a class=" text-lg ">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">{{ __('message.log_out') }}</button>
                    </form>
                </a>
            </li>

        </ul>
    </nav>


</x-layout>
