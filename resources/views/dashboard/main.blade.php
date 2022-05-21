<x-layout>

    <x-dashboard.navbar />

    <x-dashboard.worldwide-main :covidStatisticSum="$covidStatisticSum" />


    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('#menu-btn')
            const dropdown = document.querySelector('#dropdown')

            menuBtn.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
                dropdown.classList.toggle('flex');
            })
        })
    </script>

</x-layout>
