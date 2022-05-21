<x-layout>
    <div class="inline-block">
        <button id="menu-btn" class="md:hidden  cursor-pointer justify-between items-center">
            <svg class="" width="18" height="16" viewBox="0 0 18 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H18V2H0V0ZM6 7H18V9H6V7ZM0 14H18V16H0V14Z" fill="#09121F" />
            </svg>
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
