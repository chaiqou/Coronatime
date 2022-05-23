<x-layout>
    <div class="inline-block">
        <button id="menu-btn" class="md:hidden  cursor-pointer justify-between items-center">
            <x-svg.dropdown-svg />
        </button>
        <div id="dropdown" class="bg-gray-700 md:hidden hidden  flex-col rounded text-white mt-1 p-2 text-sm ">

            <a class="px-2 py-1" href="">{{ auth()->user()->username }}.</a>
            <a class="px-2 py-1" href="">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">{{ __('message.log_out') }}</button>
                </form>
            </a>
        </div>
    </div>
</x-layout>
