@props(['welcome', 'please'])

<div>
    <img class="h-10 w-auto " src="{{ asset('images/logo.png') }}" alt="Workflow">
    <h2 class="text-2xl mt-12  font-sans font-extrabold">{{ $welcome }}
    </h2>
    <p class="mt-2 text-sm text-gray-600">
        {{ $please }}
    </p>
</div>
