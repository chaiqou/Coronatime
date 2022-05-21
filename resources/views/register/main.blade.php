<x-layout>

    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-28">
            <div class="mx-18 w-full h-full mt-8 max-w-lg lg:w-96">
                <x-registration.header />
                <x-registration.form />
            </div>
            <x-language-switcher />
        </div>
        <x-form.image />
    </div>
</x-layout>
