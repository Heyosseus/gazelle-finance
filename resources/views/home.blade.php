<x-layout>
    <x-header></x-header>
    @include('components.success-message')
    @include('dashboard-components.content')
    @include('dashboard-components.partners', ['logos' => $logos])
    @include('dashboard-components.portfolio')
    @include('dashboard-components.blog', ['articles' => $articles])
    @include('dashboard-components.contact')
    <x-home-footer></x-home-footer>

        <div id="upButton" class="flex items-center scroll-button px-4 py-2 cursor-pointer duration-500 transition bg-pink-950 rounded-xl fixed bottom-10 right-5 lg:right-10 text-white" onclick="scrollToTop()">
            <img src="{{asset('icons/arrowUpIcon.svg')}}" alt="" width="15">
        </div>

        <div id="downButton" class="flex justify-between items-center cursor-pointer scroll-button px-4 py-2 duration-500 transition bg-pink-950 rounded-xl fixed bottom-10 right-5 lg:right-10 text-white" onclick="scrollToBottom()">
            <img src="{{asset('icons/arrowDownIcon.svg')}}" alt="" width="15">
        </div>
</x-layout>

<script>
    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function scrollToBottom() {
        document.body.scrollTop = document.body.scrollHeight;
        document.documentElement.scrollTop = document.documentElement.scrollHeight;
    }
</script>

