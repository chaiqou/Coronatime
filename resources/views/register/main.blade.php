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
                <x-form.header welcome='Welcome to the Coronatime' please='Please enter required info to sign up' />

                {{-- FORM --}}
                <div class="mt-6">
                    <div class="mt-9">
                        <form action="/register" method="POST" class="space-y-7">
                            @csrf

                            <x-form.input name='username' type='text' placeholder='Enter unique username'>
                                <strong>Username</strong>
                            </x-form.input>
                            <x-form.input name='email' type='email' placeholder='Enter your email'>
                                <strong>Email</strong>
                            </x-form.input>
                            <x-form.input name='password' type='password' placeholder='Fill in password'>
                                <strong>Password</strong>
                            </x-form.input>
                            <x-form.input name='password_confirmation' type='password' placeholder='Repeat password'>
                                <strong>Repeat password</strong>
                            </x-form.input>

                            <x-form.rememberme />

                            <div class="flex flex-col items-center">
                                <x-button>SIGN UP</x-button>
                                <div class="flex items-center space-x-2">
                                    <h5 class="text-center mt-4 text-gray-500">Already have an account? </h5>
                                    <a href="/" class="font-extrabold text-center mt-4">Log in</a>
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
