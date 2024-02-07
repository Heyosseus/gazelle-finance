<x-layout>
    <x-header></x-header>
    <div class="p-6 lg:p-20">
        <h1 class="text-2xl md:text-4xl ">Georgia <span class="font-bold text-pink-950">Office</span></h1>
        <div class="w-20 h-0.5 bg-black mt-4"></div>

        <div class="flex flex-col xl:flex-row space-y-5 xl:space-y-0 xl:space-x-10 mt-10">
            <div class="xl:w-1/3 shadow-2xl p-10 ">
                <h1 class="uppercase text-xl font-bold ">Why gazelle finance</h1>
                <p class="text-sm leading-7 mt-10">We provide tailored financial solutions for strong fast-growing small and medium enterprises - companies that we call “gazelles” - that are in need of capital to further expand their businesses. Our financing and partnership-oriented approach
                    enables entrepreneurs to take their businesses through the next stage of revenue growth and achieve their full potential.</p>
            </div>
            <div class="xl:w-1/3 shadow-2xl p-10">
                <h1 class="uppercase text-xl font-bold">sectors in which gazelle finance invests</h1>
                <p class="text-sm leading-7 mt-10">We invest across all sectors aside from certain negative-impact business activities such as gambling and tobacco.
                    The sectors we typically focus on are the following</p>
            </div>
            <div class="xl:w-1/3 shadow-2xl p-10">
                <h1 class="uppercase text-xl font-bold">a thriving ecosystem</h1>
                <div class="text-sm leading-7 mt-10">Gazelle Finance is strategically located in the South Caucasus region, which provides many unique advantages. Gazelle Finance maintains operations in Armenia and Georgia, countries with deep economic and cultural ties to the famous ancient East - West trade route, the Silk Road. Not only is the Silk Road historically significant, but the Silk Road has long been a gateway to Europe and the Mediterranean Sea for Asian Markets.
                    <br><br>
                    <span class="additional-text" style="display: none;">Through its two offices in Tbilisi and Yerevan, Gazelle Finance provides services not only in the capital cities, but also country - wide. Gazelle Finance has investment professionals within a six - hour drive of almost any point in either country.</span>
                    <a href="#" class="read-more text-pink-950 font-semibold mt-5 flex items-center space-x-2">
                        <p>Read more </p>
                        <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var readMoreLink = document.querySelector('.read-more');
        var additionalText = document.querySelector('.additional-text');

        readMoreLink.addEventListener('click', function(event) {
            event.preventDefault();

            if (additionalText.style.display === 'none') {
                additionalText.style.display = 'inline';
                readMoreLink.textContent = 'Read less';
            } else {
                additionalText.style.display = 'none';
                readMoreLink.textContent = 'Read more';
            }
        });
    });
</script>
