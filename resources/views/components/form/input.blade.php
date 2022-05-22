@props(['name', 'type', 'placeholder'])
<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700"> {{ $slot }}
    </label>
    <div class="mt-1">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
            placeholder="{{ $placeholder }}" autocomplete="{{ $name }}" value="{{ old($name) }}"
            class=" @if ($errors->has($name)) border border-red-500 @else border-none shadow @endif appearance-none block w-full p-4 border rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
        @error($name)
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>
