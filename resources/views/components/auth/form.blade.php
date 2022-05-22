<div class="mt-6">
    <div class="mt-9">
        <form action="/login" method="POST" class="space-y-9 md:space-y-7">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">
                    <strong>{{ __('message.username') }}</strong>
                </label>
                <div class="mt-1">
                    <input id="username" name="username" type="text"
                        placeholder="{{ __('message.username_placeholder') }}" autocomplete="username"
                        value="{{ old('username') }}"
                        class="@if ($errors->has('username')) border border-red-500 @else border border-gray-300 @endif appearance-none block w-full p-4  rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

                    @error('username')
                        <p class="flex items-center font-bold text-red-500 text-xs mt-2">
                            <x-svg.error-svg />
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">
                    <strong>{{ __('message.password') }}</strong>
                </label>
                <div class="mt-1">
                    <input id="password" name="password" type="password"
                        placeholder="{{ __('message.password_placeholder') }}" autocomplete="password"
                        value="{{ old('password') }}"
                        class="@if ($errors->has('password')) border border-red-500 @else border border-gray-300 @endif appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:border focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

                    @error('password')
                        <p class="flex items-center text-red-500 font-bold text-xs mt-2">
                            <x-svg.error-svg />
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox"
                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
                    <label for="remember" class="ml-2 font-bold block text-sm accent-green-700 text-gray-900">
                        {{ __('message.remember_me') }}
                    </label>
                </div>

                <div class="text-sm">
                    <a href="{{ route('forgot.password.form') }}"
                        class="font-medium  text-indigo-600 hover:text-indigo-500">
                        {{ __('message.forgot_password') }}
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <x-button>{{ __('message.log_in') }}</x-button>
                <div class="flex items-center space-x-2">
                    <h5 class="text-center mt-4  text-gray-500">
                        {{ __('message.dont_have_an_account') }}</h5>
                    <a href="/register" class="text-center  mt-4 font-extrabold">
                        {{ __('message.sign_up_free') }}</a>
                </div>

            </div>
        </form>
    </div>
</div>
