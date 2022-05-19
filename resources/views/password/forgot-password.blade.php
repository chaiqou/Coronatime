{{-- <x-layout>
    <div class="flex justify-start items-start h-0">
        <img class="mx-auto justify-self-start h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Workflow">
    </div>

    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">


        <div class="max-w-md w-full space-y-6">


            <div>

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">{{ __('message.reset_password') }}
                </h2>

            </div>
            <form class=" space-y-16" action="{{ route('password.request') }}" method="POST">
                @csrf

                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address"><strong>{{ __('message.email') }}</strong></label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Email address">
                    </div>

                </div>



                <div>
                    <x-button>{{ __('message.uppercase_reset_password') }}</x-button>
                </div>
            </form>
        </div>
    </div>

</x-layout> --}}

<x-layout>
    <div class="flex justify-start items-start h-0">
        <img class="mx-auto justify-self-start h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Workflow">
    </div>

    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">


        <div class="max-w-md w-full space-y-6">


            <div>

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Reset Password</h2>

            </div>
            <form class=" space-y-16" action="{{ route('forgot.password.link') }}" method="POST">
                @csrf

                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address"><strong>Email</strong></label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Email address">
                    </div>

                </div>



                <div>
                    <x-button>RESET PASSWORD</x-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
