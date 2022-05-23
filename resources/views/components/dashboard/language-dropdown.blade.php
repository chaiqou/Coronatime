<button class="flex items-center"
    @click="show = !show">{{ Config::get('app.locale') === 'ka' ? 'ქართული' : 'English' }}
    <x-svg.arrow-svg />
</button>

<div class="py-2 absolute " x-show="show" style="display: none">
    @if (Config::get('app.locale') === 'ka')
        <a class="block hover:bg-green-500 mt-1 hover:text-white focus:text-white hover:text-extrabold hover:rounded"
            href="{{ Config::get('app.locale') === 'ka' ? route('locale.setting', 'en') : '' }}">{{ __('message.english') }}</a>
    @else
        <a class="block hover:bg-green-500 mt-1 hover:text-white focus:text-white hover:text-extrabold hover:rounded"
            href="{{ Config::get('app.locale') === 'en' ? route('locale.setting', 'ka') : '' }}">{{ __('message.georgian') }}</a>
    @endif
</div>
