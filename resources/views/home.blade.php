<x-layout>
    <x-header></x-header>
    <div class="flex lg:flex-col xl:flex-row p-4 lg:p-20 justify-between xl:space-x-4">
        <div class="block lg:w-full  xl:w-[700px] lg:h-[400px] rounded-md bg-amber-950"></div>

        <div class="w-full xl:w-[700px] px-4 py-8 lg:p-12 rounded-lg shadow-xl flex flex-col justify-between ">
            <h1 class="text-2xl lg:text-3xl lg:text-center xl:text-start [text-shadow:_0_1px_0_rgb(0_0_0_/_60%)]">
                Partnering for
                business <span class="text-pink-950 font-bold">Growth</span></h1>

            <p class="mt-5 xl:mt-[-20px]">We invest in gazelles, high-growth, small and medium companies <span
                    class="text-pink-950 font-bold">(SMEs)</span>
                in the Eurasia region, with a current focus on <em class=" [text-shadow:_0_1px_0_rgb(0_0_0_/_60%)]">Georgia</em>
                and <em class=" [text-shadow:_0_1px_0_rgb(0_0_0_/_60%)]">Armenia.</em>
                <br>
                <br>
                We provide growth capital and businesses development services to our <em
                    class=" [text-shadow:_0_1px_0_rgb(0_0_0_/_60%)]">portfolio</em> companies
                to rapidly scale their businesses and become market leaders.</p>

            <div
                class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 text-center flex-wrap mt-5 lg:mt-10  lg:justify-center xl:justify-start lg:space-x-4">
                <div
                    class="border py-2 px-4 rounded-full border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                    Growth
                </div>
                <div
                    class="border py-2 px-4 rounded-full border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white transition-colors">
                    SMEs
                </div>
                <div
                    class="border py-2 px-4 rounded-full border-orange-700 text-orange-700 hover:bg-orange-700 hover:text-white transition-colors">
                    Services
                </div>
                <div
                    class="border py-2 px-4 rounded-full border-green-600 text-green-600 hover:bg-green-600 hover:text-white transition-colors">
                    Portfolio
                </div>
            </div>
        </div>
    </div>
    @include('dashboard-components.blog')
    @include('dashboard-components.partners')
    <x-footer></x-footer>

    <div id="upButton" class="flex items-center scroll-button px-4 py-2 cursor-pointer duration-500 transition bg-pink-950 rounded-xl fixed bottom-10 right-5 lg:right-10 text-white" onclick="scrollToTop()">
        <img src="{{asset('icons/arrowUpIcon.svg')}}" alt="" width="15">
    </div>

    <div id="downButton" class="flex justify-between items-center cursor-pointer scroll-button px-4 py-2 duration-500 transition bg-pink-950 rounded-xl fixed bottom-10 right-5 lg:right-10 text-white" onclick="scrollToBottom()">
        <img src="{{asset('icons/arrowDownIcon.svg')}}" alt="" width="15">
    </div>
</x-layout>

<script>
    function scrollToTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }

    function scrollToBottom() {
        document.body.scrollTop = document.body.scrollHeight; // For Safari
        document.documentElement.scrollTop = document.documentElement.scrollHeight; // For Chrome, Firefox, IE, and Opera
    }
</script>

