<div class="px-4 max-w-7xl mx-auto overflow-y-auto scroll-smooth sm:px-6 lg:px-8 h-96">
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4  sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full  align-middle md:px-6 lg:px-8">
                <div class="shadow ring-1   ring-black ring-opacity-5 md:rounded-lg">
                    <table class="w-full  md:h-20 divide-y divide-gray-300 sm:h-1/4">
                        <x-dashboard.table-column-head />
                        <x-dashboard.table-column-body :covidStatisticSum="$covidStatisticSum" :countries="$countries" />
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
