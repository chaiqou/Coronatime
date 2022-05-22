<x-layout>
    <div class="flex justify-start items-start h-0">

        <img href='/' class="mx-auto justify-self-start h-10 w-auto" src="{{ asset('images/logo.png') }}"
            alt="Workflow">


    </div>

    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-6">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">{{ __('message.reset_password') }}
                </h2>
            </div>
            <form class=" space-y-16" action="{{ route('forgot.password.form') }}" method="POST">
                @csrf

                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email"><strong>{{ __('message.email') }}</strong></label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="@if ($errors->has('email')) border border-red-500 @else border border-gray-300 @endif appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('message.email_placeholder') }}">
                        @error('email')
                            <p class="flex items-center font-bold text-red-500 text-xs mt-2">
                                <x-svg.error-svg />
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div>
                    <x-button>{{ __('message.uppercase_reset_password') }}</x-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
