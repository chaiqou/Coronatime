@props(['name', 'type', 'placeholder'])
<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700"> {{ $slot }}
    </label>
    <div class="mt-1">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
            placeholder="{{ $placeholder }}" autocomplete="{{ $name }}" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>
</div>
