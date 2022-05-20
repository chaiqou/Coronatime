<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">
                <div>
                    <a href="/">
                        <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
                    </a>

                    <h2 class="text-2xl mt-12  font-sans lg:whitespace-nowrap font-extrabold">
                        {{ __('message.welcome_to_the_coronatime') }}
                    </h2>
                    <p class="mt-2 text-sm  lg:whitespace-nowrap text-gray-600">
                        {{ __('message.please_enter_sign_up_info') }}
                    </p>
                </div>

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="/register" method="POST" class="space-y-7">
                            @csrf

                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.username') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="username" name="username" type="text"
                                        placeholder="{{ __('message.enter_unique_username_placeholder') }}"
                                        autocomplete="username" value="{{ old('username') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('username')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.email') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email"
                                        placeholder="{{ __('message.email_placeholder') }}" autocomplete="email"
                                        value="{{ old('email') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.password') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password"
                                        placeholder="{{ __('message.password_placeholder') }}"
                                        autocomplete="password" value="{{ old('password') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-2"> {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.repeat_password') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        placeholder="{{ __('message.repeat_password_placeholder') }}"
                                        autocomplete="password_confirmation"
                                        value="{{ old('password_confirmation') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('password_confirmation')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>


                            <div class="flex flex-col items-center">
                                <x-button>{{ __('message.uppercase_sign_up') }}</x-button>
                                <div class="flex items-center space-x-2">
                                    <h5 class="text-center mt-4 text-gray-500">
                                        {{ __('message.already_have_an_account') }}</h5>
                                    <a href="/"
                                        class="font-extrabold text-center mt-4">{{ __('message.lowercase_log_in') }}</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <a href="
            {{ Config::get('app.locale') === 'en' ? route('locale.setting', 'ka') : route('locale.setting', 'en') }}"
                class="inline-block inline-flex shrink-0 bg-white py-2 px-4  text-base  ">
                {{ Config::get('app.locale') === 'ka' ? 'ქართული' : 'English' }}

            </a>
        </div>

        <x-form.image />

    </div>
</x-layout>
