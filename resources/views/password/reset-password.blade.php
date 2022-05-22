<x-layout>
    <div class="flex flex-col items-center ">
        <img class="h-10 w-auto mt-8" src="{{ asset('images/logo.png') }}" alt="Workflow">
    </div>
    <div class=" flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-6">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">{{ __('message.reset_password') }}
                </h2>
            </div>
            <x-password.reset-form :token='$token' :email='$email' />
        </div>
    </div>
</x-layout>
