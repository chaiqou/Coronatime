<a href="
{{ Config::get('app.locale') === 'en' ? route('locale.setting', 'ka') : route('locale.setting', 'en') }}"
    class="inline-block inline-flex shrink-0 bg-white py-2 px-4  text-base  ">
    {{ Config::get('app.locale') === 'ka' ? 'ქართული' : 'English' }}

</a>
