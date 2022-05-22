<div class="px-2 max-w-7xl mx-auto overflow-auto scroll-smooth scroll-m-0 sm:px-3 lg:px-8 h-1/2">
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4  sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full align-middle md:px-6 lg:px-8">
                <div class="shadow ring-1  ring-black ring-opacity-5 md:rounded-lg">
                    <table class="w-full md:h-40 divide-y divide-gray-300 overflow-y-hidden sm:h-3/4">
                        <x-dashboard.table-column-head />
                        <x-dashboard.table-column-body :covidStatisticSum="$covidStatisticSum" :countries="$countries" />
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
