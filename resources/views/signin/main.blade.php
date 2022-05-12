<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">

                {{-- ლოგო და ველქამის კონტეინერი --}}
                <x-form.header welcome='Welcome to the Coronatime' please='Please enter required info to sign up' />

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="#" method="POST" class="space-y-10">
                            <x-form.input name='email' type='text' placeholder='username'>Username</x-form.input>
                            <x-form.input name='email' type='email' placeholder='email'>Email</x-form.input>
                            <x-form.input name='email' type='password' placeholder='password'>Password</x-form.input>
                            <x-form.input name='email' type='password' placeholder='repeat password'>Repeat password
                            </x-form.input>

                            <x-form.rememberme />

                            <div class="flex flex-col items-center">
                                <x-button>SIGN UP</x-button>
                                <h5 class="text-center mt-4 text-gray-500">Already have an account? <a href="#"
                                        class="font-extrabold">Log in</a></h5>
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
