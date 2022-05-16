<x-layout>
    <div class="flex flex-col items-center ">
        <img class="h-10 w-auto mt-8" src="{{ asset('images/logo.png') }}" alt="Workflow">
    </div>

    <div class=" flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">


        <div class="max-w-md w-full space-y-6">


            <div>

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Reset Password</h2>

            </div>
            <form class="space-y-12" action="/reset-password" method="POST">


                @csrf

                <input type="hidden" name="token" value="{{ $token }}">



                <input type="hidden" id="email" name="email" autofocus value="{{ $email }}"
                    class="appearance-none w-full p-4  rounded-lg relative block border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">


                <div class="rounded-md shadow-sm space-y-0">
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" id="password" name="password"
                        class="appearance-none w-full p-4  rounded-lg relative block border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="rounded-md shadow-sm -space-y-px">
                    <label for="password_confirmation"><strong>Password Confirmation</strong></label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="appearance-none w-full p-4  rounded-none relative block rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <x-button>RESET PASSWORD</x-button>
                </div>

            </form>
        </div>
    </div>



</x-layout>
