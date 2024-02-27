<x-layout>
    <x-header></x-header>
    <div class="p-6 lg:p-10">
        <h1 class="text-2xl md:text-4xl text-center mt-2">Our <span class="font-bold text-pink-950">Offices</span></h1>
        <div class="w-20 h-0.5 bg-black mt-4 mx-auto"></div>

        <div class="flex flex-col-reverse xl:flex-row justify-around space-y-3 xl:space-y-0 xl:space-x-10 mt-12">

            <div class="xl:w-1/2 shadow-2xl px-10 py-1 bg-gray-50 ">
                <h1 class="uppercase text-xl font-bold text-pink-950">PLEASE CONTACT US AT OUR RELEVANT COUNTRY
                    OFFICE:</h1>
                <div class="space-y-1">
                    <p class="text-xl font-bold text-pink-950 leading-7 mt-10">Tbilisi, Georgia.</p>
                    <p class="text-sm  mt-10 italic">- 8a Petre Melikishvili/1 Erekle Tatishvili Street, 0179
                        Melikishvili Business Center, 7th Floor</p>
                    <p class="text-sm leading-7 mt-10">- +995 32 2 243 432</p>
                    <p class="text-sm leading-7 mt-10">- +995 591 117 936</p>
                    <div>
                        <a href="mailto:admin@gazellefinance.com" class="font-bold text-blue-500 text-sm"><span class="text-black font-normal">-</span> admin@gazellefinance.com </a>
                    </div>
                </div>
                <div class="space-y-1">
                    <p class="text-xl font-bold text-pink-950 leading-7 mt-10">Yerevan, Armenia.</p>
                    <p class="text-sm  mt-10 italic">- Teryan St., 105/1 Buidling, 5th Floor, Office 505, Citadel
                        Business Center, Kentron adm.district </p>
                    <p class="text-sm leading-7 mt-10">- +374-12-883880 </p>
                    <div><a href="mailto:armenia@gazellefinance.com" class="font-bold text-blue-500 text-sm"><span class="text-black font-normal">-</span> armenia@gazellefinance.com </a>
                    </div>
                </div>
            </div>
            <div class="w-full h-[500px] mx-auto z-10">
                <div class="w-full h-full" id="mapid"></div>
            </div>
        </div>


    </div>
    <x-footer></x-footer>
</x-layout>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
      integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
      crossorigin=""/>


<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([41.70718712284052, 44.78507985407697], 7);

    var marker1 = L.marker([41.70718712284052, 44.78507985407697], {color: 'red'}).addTo(map);
    var marker2 = L.marker([40.189924815327025, 44.521968018359935]).addTo(map);
    var baseUrl = "{{ url('/') }}";

    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        minZoom: 2, // Set a minimum zoom level
        maxZoom: 18, // Set a maximum zoom level
        tileSize: 512, // Set tile size to 512x512 for better performance
        zoomOffset: -1, // Adjust zoom offset
        detectRetina: true, // Detect retina displays
    }).addTo(map);

</script>

