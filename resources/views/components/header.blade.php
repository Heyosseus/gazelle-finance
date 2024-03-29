@php use Illuminate\Support\Facades\App; @endphp

<x-layout>

{{--    <header id="constructionHeader">--}}
{{--        <center>--}}
{{--            <img src="https://cdn-icons-png.flaticon.com/512/3382/3382506.png" alt="Construction Icon"> <!-- Replace with your construction icon -->--}}
{{--        </center>--}}
{{--        <h3>Site Under Construction</h3>--}}
{{--        <h2>We apologize for the inconvenience. Please check back later.</h2>--}}
{{--    </header>--}}
{{--    <script>--}}
{{--        document.addEventListener('scroll', function() {--}}
{{--            var header = document.getElementById('constructionHeader');--}}
{{--            var scrollY = window.scrollY;--}}

{{--            if (scrollY > 50) {--}}
{{--                header.style.top = '0';--}}
{{--            } else {--}}
{{--                header.style.top = '-100px';--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

{{--    <style>--}}
{{--        header {--}}
{{--            background-color: #ffd700; /* Trending yellow color */--}}
{{--            color: #333;--}}
{{--            padding: 10px;--}}
{{--            text-align: center;--}}
{{--            position: fixed;--}}
{{--            top: -100px;--}}
{{--            left: 0;--}}
{{--            width: 100%;--}}
{{--            z-index: 1000;--}}
{{--            transition: top 0.3s ease;--}}
{{--            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for a subtle effect */--}}
{{--        }--}}

{{--        header img {--}}
{{--            width: 40px; /* Adjust icon size */--}}
{{--            height: 40px;--}}
{{--            margin-right: 10px;--}}
{{--        }--}}

{{--        main {--}}
{{--            margin-top: 60px;--}}
{{--            padding: 20px;--}}
{{--            text-align: center;--}}
{{--        }--}}
{{--    </style>--}}

    <div class="flex items-center justify-between bg-pink-950 w-full px-4 lg:px-10 py-3 ">
        <a href="/"><img src="{{asset('assets/gazzele-logo.png')}}" alt="logo" class="lg:pl-12"></a>
        <div class="hidden lg:flex justify-around lg:w-[800px] items-center">
            <nav class="flex space-x-8 text-white">
                <a href="/" class=" transition-colors duration-300 text-lg">{{ __('translate.home') }}
                    @if(request()->is('/'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <div class="group relative">
                    <div id="services" class="transition-colors duration-300 cursor-pointer text-lg">{{ __('translate.services') }}
                        @if(request()->is('social-impacts') || request()->is('ukraine-bridge-facility') || request()->is('careers'))
                            <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                        @endif
                    </div>
                    <div id="servicesDropdown"
                         class="hidden absolute z-10 left-0 mt-2 bg-white items-center space-x-6 shadow-md text-black rounded-md text-sm w-[460px]  transition-all ">
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">{{ __('translate.our_work') }}</h1>
                            <a href="/uk_facility" class="block hover:text-pink-950 transition-colors">{{ __('translate.ukrainian_bridge_facility') }}</a>
                            <a href="/portfolio" class="block  pt-2 hover:text-pink-950 transition-colors">{{ __('translate.Portfolio/Gazelles') }}</a>
                            <a href="/careers" class="block pt-2 hover:text-pink-950 transition-colors">{{ __('translate.careers') }}</a>
                        </div>
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">{{ __('translate.company') }}</h1>
                            <a href="/offices" class="block hover:text-pink-950 transition-colors">{{ __('translate.georgiaoffice') }}</a>
                            <a href="https://gazellefinance.am/language/en/home/" target="_blank" class="block  pt-2 hover:text-pink-950 transition-colors">{{ __('translate.armeniaoffice') }}</a>
                            <a href="/team" class="block pt-2 hover:text-pink-950 transition-colors">{{ __('translate.team') }}</a>

                        </div>

                    </div>
                </div>
                <a href="/about" class=" transition-colors duration-300 text-lg">{{ __('translate.about') }}
                    @if(request()->is('about'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <a href="/products" class=" transition-colors duration-300 text-lg">{{ __('translate.products') }}
                    @if(request()->is('products'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <a href="/news" class=" transition-colors duration-300 text-lg">{{ __('translate.news') }}
                    @if(request()->is('news'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <div class="group relative">
                    <div id="contact" class="transition-colors duration-300 cursor-pointer text-lg">{{ __('translate.contact') }}
                    </div>
                    <div id="contactDropdown"
                         class="hidden align-center absolute z-20 left-0 mt-2 bg-white space-x-6 shadow-md text-black rounded-md text-sm w-[120px]  ml-[-10px] opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                        <div class="p-4 space-y-1">
                            <a href="/testimonials" class="block  hover:text-pink-950 transition-colors">{{ __('translate.testimonials') }}</a>
                            <a href="{{ env('APP_URL') }}#partners" class="block pt-2 hover:text-pink-950 transition-colors">{{ __('translate.partners') }}</a>
                            <a href="{{ env('APP_URL') }}#contact_us" class="block pt-2 hover:text-pink-950 transition-colors">{{ __('translate.contact') }}</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="flex space-x-4">
                <a href="{{ route('change.language', 'en') }}"><img style="width: 26px" src="{{ asset('icons/en.webp') }}" alt=""></a>
                <a href="{{ route('change.language', 'ka') }}"><img style="width: 26px" src="{{ asset('icons/ge.png') }}" alt=""></a>
            </div>
        </div>

        <div class="block lg:hidden" id="burgerMenuBtn">
            <img src="{{ asset('icons/burgerMenu.svg') }}" alt="Burger Menu" width="40" class="cursor-pointer">
        </div>

        {{--        Mobile Menu--}}

        <div id="sidebar"
             class=" lg:hidden fixed top-0 left-[-10px] w-[80vw] h-full bg-white shadow-xl transform -translate-x-full overflow-y-auto transition-transform duration-300 ease-in-out z-40">
            <div class="px-10 py-7 md:px-20 md:py-12 select-none">
                <div class="flex items-start justify-between">
                    <h1 class="font-bold mb-4 text-3xl">{{__('translate.links')}}</h1>
                    <img src="{{ asset('icons/closeIcon.svg') }} " alt="" width="30" id="close" class="cursor-pointer active:rotate-[360deg] duration-300 transition" >
                </div>
                <div id="services-link" class="block py-2 text-xl relative group">
                    <span class="flex justify-between items-center cursor-pointer"><p>{{ __('translate.services') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                    <div class="submenu hidden  py-2 px-4 mt-2">
                        <a href="/uk_facility" class="block py-2  text-sm hover:text-pink-950 transition-colors">{{ __('translate.ukrainian_bridge_facility') }}</a>
                        <a href="/portfolio" class="block  py-2 text-sm  hover:text-pink-950 transition-colors">{{ __('translate.Portfolio/Gazelles') }}</a>
                        <a href="/careers" class="block py-2  text-sm hover:text-pink-950 transition-colors">{{ __('translate.careers') }}</a>
                        <a href="/offices" class="block  py-2  text-sm hover:text-pink-950 transition-colors">{{ __('translate.georgiaoffice') }}</a>
                        <a href="https://gazellefinance.am/language/en/home/" target="_blank" class="block  text-sm  py-2 hover:text-pink-950 transition-colors">{{ __('translate.armeniaoffice') }}</a>
                        <a href="/team" class="block py-2 text-sm  hover:text-pink-950 transition-colors">{{ __('translate.team') }}</a>
                    </div>
                </div>
                <a href="/about" class="block py-2 text-xl relative group">
                    <span class="flex justify-between items-center"><p>{{ __('translate.about') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="/products" class="block py-2 text-xl relative group">
                <span class="flex justify-between items-center"><p>{{ __('translate.products') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="/news" class="block py-2 text-xl relative group">
                <span class="flex justify-between items-center"><p>{{ __('translate.news') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="{{ env('APP_URL') }}/#contact_us" class="block py-2 text-xl relative group cursor-pointer">
                    <span class="flex justify-between items-center"><p>{{ __('translate.contact') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
                </a><a href="{{ env('APP_URL') }}testimonials" class="block py-2 text-xl relative group cursor-pointer">
                    <span class="flex justify-between items-center"><p>{{ __('translate.testimonials') }}</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
                </a>
                <div class="flex space-x-4 mt-16">
                    <a href="{{ route('change.language', 'en') }}"><img style="width: 34px" src="{{ asset('icons/en.webp') }}" alt=""></a>
                    <a href="{{ route('change.language', 'ka') }}"><img style="width: 34px" src="{{ asset('icons/ge.png') }}" alt=""></a>
                </div>
            </div>

        </div>
    </div>
</x-layout>

<script>
    document.getElementById('services-link').addEventListener('click', function(event) {
        event.preventDefault();
        const submenu = this.querySelector('.submenu');
        submenu.classList.toggle('hidden');
    });

    document.querySelectorAll('.submenu a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop the click event from bubbling up
        });
    });
</script>
