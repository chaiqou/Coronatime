<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">

                <div>
                    <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
                    <h2 class="text-2xl mt-12  font-sans font-extrabold">{{ __('message.welcome_back') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('message.enter_details') }}
                    </p>
                </div>


                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="/login" method="POST" class="space-y-7">
                            @csrf

                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.username') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="username" name="username" type="text" placeholder="satargmni"
                                        autocomplete="username" value="{{ old('username') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

                                    @error('username')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    <strong>{{ __('message.password') }}</strong>
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" placeholder="satargmni"
                                        autocomplete="password" value="{{ old('password') }}"
                                        class="appearance-none block w-full p-4 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

                                    @error('password')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>




                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="rememberme" name="rememberme" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
                                    <label for="rememberme" class="ml-2 block text-sm accent-green-700 text-gray-900">
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

            </div>
            <a href="
            {{ Config::get('app.locale') === 'en' ? route('locale.setting', 'ka') : route('locale.setting', 'en') }}"
                class="inline-block inline-flex shrink-0 bg-white py-2 px-4  text-base  ">
                {{ Config::get('app.locale') === 'ka' ? 'ქართული' : 'English' }}

            </a>
        </div>

        {{-- IMAGE --}}
        <x-form.image />

    </div>
</x-layout>
