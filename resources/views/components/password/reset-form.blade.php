<form class="space-y-12" action="/reset-password" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <input type="hidden" id="email" name="email" autofocus value="{{ $email }}"
        class="appearance-none w-full p-4  rounded-lg relative block border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
    <div class="rounded-md shadow-sm space-y-0">
        <label for="password"><strong>{{ __('message.new_password') }}</strong></label>
        <input type="password" id="password" name="password" placeholder="{{ __('message.fill_password') }}"
            class="@if ($errors->has('password')) border border-red-500 @else border border-gray-300 @endif appearance-none w-full p-4  rounded-lg relative block  placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        @error('password')
            <p class="flex items-center font-bold text-red-500 text-xs mt-2">
                <x-svg.error-svg />
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="rounded-md shadow-sm -space-y-px">
        <label for="password_confirmation"><strong>{{ __('message.repeat_password_placeholder') }}</strong></label>
        <input type="password" id="password_confirmation" name="password_confirmation"
            placeholder="{{ __('message.repeat_password_placeholder') }}"
            class="@if ($errors->has('password')) border border-red-500 @else border border-gray-300 @endif appearance-none w-full p-4  rounded-none relative block rounded-lg  placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        @error('password')
            <p class="mt-6 flex items-center font-bold text-red-500 text-xs">
                <x-svg.error-svg />
                {{ $message }}
            </p>
        @enderror
    </div>

    <div>
        <x-button>{{ __('message.uppercase_reset_password') }}</x-button>
    </div>

</form>
