<x-layout>
    <div class="flex flex-col items-center">
        <img class="h-10 w-auto mt-8" src="{{ asset('images/logo.png') }}" alt="Workflow">
        <div class="flex flex-col items-center">
            <img class=" h-12 w-auto mb-4 mt-80" src="{{ asset('images/confirm.png') }}" alt="confirm">
            <h1 class="h-10 w-auto mt-94">{{ __('message.updated_password') }}</h1>
            <a href="/"
                class="w-full flex justify-center mt-12 p-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sign-button hover:bg-sign-button focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sign-button">
                {{ strtoupper(__('message.sign_in')) }}
            </a>
        </div>
    </div>
</x-layout>
