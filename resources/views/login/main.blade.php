<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">

                {{-- ლოგო და ველქამის კონტეინერი --}}
                <x-form.header welcome='Welcome back' please='Welcome back! Please enter your details' />

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="#" method="POST" class="space-y-10">
                            <x-form.input name='email' type='text' placeholder='username'>Username</x-form.input>
                            <x-form.input name='email' type='password' placeholder='password'>Password</x-form.input>


                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="rememberlogin" name="rememberlogin" type="checkbox"
                                        class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" />
                                    <label for="rememberlogin" class="ml-2 block text-sm text-gray-900"> Remember me
                                    </label>
                                </div>

                                <div class="text-sm">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your
                                        password?
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col items-center">
                                <x-button>LOG IN</x-button>
                                <h5 class="text-center mt-4 text-gray-500">Don't have an account? <a href="#"
                                        class="font-extrabold">Sign Up</a></h5>
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
