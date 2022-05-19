<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">

                {{-- FLASH MESSAGE --}}
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if (Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                    class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div>

                {{-- ლოგო და ველქამის კონტეინერი --}}
                <div>
                    <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
                    <h2 class="text-2xl mt-12  font-sans font-extrabold">{{ __('message.welcome_to_the_coronatime') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('message.please_enter_sign_up_info') }}
                    </p>
                </div>

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="/register" method="POST" class="space-y-7">
                            @csrf

                            <x-form.input name='username' type='text' placeholder='Enter unique username'>
                                <strong>{{ __('message.username') }}</strong>
                            </x-form.input>
                            <x-form.input name='email' type='email' placeholder='Enter your email'>
                                <strong>{{ __('message.email') }}</strong>
                            </x-form.input>
                            <x-form.input name='password' type='password' placeholder='Fill in password'>
                                <strong>{{ __('message.password') }}</strong>
                            </x-form.input>
                            <x-form.input name='password_confirmation' type='password' placeholder='Repeat password'>
                                <strong>{{ __('message.repeat_password') }}</strong>
                            </x-form.input>

                            <x-form.rememberme />

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

        {{-- IMAGE --}}
        <x-form.image />

    </div>
</x-layout>
