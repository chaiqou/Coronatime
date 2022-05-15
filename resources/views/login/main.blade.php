<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">

                {{-- ლოგო და ველქამის კონტეინერი --}}
                <x-form.header welcome='Welcome back' please='Welcome back! Please enter your details' />

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="/login" method="POST" class="space-y-7">
                            @csrf
                            <x-form.input name='username' type='text' placeholder='Enter unique username or email'>
                                <strong>Username</strong>
                            </x-form.input>
                            <x-form.input name='password' type='password' placeholder='Fill in password'>
                                <strong>password</strong>
                            </x-form.input>


                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="rememberlogin" name="rememberlogin" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
                                    <label for="rememberlogin" class="ml-2 block text-sm text-gray-900"> Remember me
                                    </label>
                                </div>

                                <div class="text-sm">
                                    <a href="{{ route('password.request') }}"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot
                                        your
                                        password?
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col items-center">
                                <x-button>LOG IN</x-button>
                                <div class="flex items-center space-x-2">
                                    <h5 class="text-center mt-4  text-gray-500">Don't have an account? </h5>
                                    <a href="/register" class="text-center  mt-4 font-extrabold"> Sign up for free</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        {{-- IMAGE --}}
        <x-form.image />

    </div>
</x-layout>
