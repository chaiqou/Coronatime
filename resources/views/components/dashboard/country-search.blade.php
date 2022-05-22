 <form action="" method="GET">
     <div class="flex space-x-3 w-full mb-4 md:space-x-8 md:max-w-7xl mx-auto">

         <label for="search" class="sr-only">Search</label>

         <div class="relative flex items-center">
             <x-svg.search />
             <input type="search" name="search" id="search" value="{{ request('search') }}"
                 class="pr-14 pl-8 px-4 max-w-6xl mx-auto font-semibold  md:border-2 h-12  shadow-sm sm:text-sm border-gray-300 rounded-md"
                 placeholder="{{ __('message.search_by_country') }}">
         </div>
         </input>
     </div>
 </form>
