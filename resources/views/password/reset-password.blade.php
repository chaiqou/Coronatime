<x-layout>
    <div class="flex justify-start items-start h-0">
        <img class="mx-auto justify-self-start mt-4 h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Workflow">
    </div>

    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">


        <div class="max-w-md w-full space-y-6">


            <div>

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Reset Password</h2>

            </div>
            <form class=" space-y-16" action="/reset-password" method="POST">


                @csrf

                <input type="hidden" name="token" value="{{ $token }}">



                <input type="hidden" id="email" name="email" autofocus value="{{ $email }}"
                    class="appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">


                <div class="rounded-md shadow-sm -space-y-px">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                </div>

                <div class="rounded-md shadow-sm -space-y-px">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="appearance-none w-full p-4  rounded-none relative block border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                </div>

                <div>
                    <x-button>RESET PASSWORD</x-button>
                </div>

            </form>
        </div>
    </div>



</x-layout>
