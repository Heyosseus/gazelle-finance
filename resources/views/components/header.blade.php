<x-layout>
    <div class="flex items-center justify-between bg-pink-950 w-full px-4 lg:px-10 py-3 ">
        <a href="/"><img src="{{asset('assets/gazzele-logo.png')}}" alt="logo" class="lg:pl-12"></a>
        <div class="hidden lg:flex justify-around lg:w-[800px] items-center">
            <nav class="flex space-x-8 text-white">
                <a href="/" class=" transition-colors duration-300 text-lg">Home
                    @if(request()->is('/'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <div class="group relative">
                    <div id="services" class="transition-colors duration-300 cursor-pointer text-lg">Services
                        @if(request()->is('social-impacts') || request()->is('ukraine-bridge-facility') || request()->is('careers'))
                            <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                        @endif
                    </div>
                    <div id="servicesDropdown"
                         class="hidden absolute z-10 left-0 mt-2 bg-white items-center space-x-6 shadow-md text-black rounded-md text-sm w-[460px]  transition-all ">
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Our work</h1>
                            <a href="/uk_facility" class="block hover:text-pink-950 transition-colors">Ukrainian bridge
                                facility</a>
                            <a href="/portfolio" class="block  pt-2 hover:text-pink-950 transition-colors">Portfolio / Gazelles</a>
                            <a href="/careers" class="block pt-2 hover:text-pink-950 transition-colors">Careers</a>
                        </div>
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Company</h1>
                            <a href="/offices" class="block hover:text-pink-950 transition-colors">Georgia's office</a>
                            <a href="https://gazellefinance.am/language/en/home/" target="_blank" class="block  pt-2 hover:text-pink-950 transition-colors">Armenia's office</a>
                            <a href="/team" class="block pt-2 hover:text-pink-950 transition-colors">Team</a>

                        </div>

                    </div>
                </div>
                <a href="/about" class=" transition-colors duration-300 text-lg">About
                    @if(request()->is('about'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <a href="/products" class=" transition-colors duration-300 text-lg">Products
                    @if(request()->is('products'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <a href="/news" class=" transition-colors duration-300 text-lg">News
                    @if(request()->is('news'))
                        <div class=" bg-white rounded-full w-1 h-1 mx-auto"></div>
                    @endif
                </a>
                <div class="group relative">
                    <div id="contact" class="transition-colors duration-300 cursor-pointer text-lg">Contact
                    </div>
                    <div id="contactDropdown"
                         class="hidden align-center absolute z-20 left-0 mt-2 bg-white space-x-6 shadow-md text-black rounded-md text-sm w-[120px]  ml-[-10px] opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                        <div class="p-4 space-y-1">
                            <a href="/testimonials" class="block  hover:text-pink-950 transition-colors">Testimonials</a>
                            <a href="{{ env('APP_URL') }}#partners" class="block pt-2 hover:text-pink-950 transition-colors">Partners</a>
                            <a href="{{ env('APP_URL') }}#contact_us" class="block pt-2 hover:text-pink-950 transition-colors">Contact us</a>
                        </div>
                    </div>
                </div>
            </nav>
            <select id="langs"
                    class="bg-white border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-2 px-3 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="En" class="rounded-2xl">En</option>
                <option value="Ka">Ka</option>
            </select>
        </div>

        <div class="block lg:hidden" id="burgerMenuBtn">
            <img src="{{ asset('icons/burgerMenu.svg') }}" alt="Burger Menu" width="40" class="cursor-pointer">
        </div>

        {{--        Mobile Menu--}}

        <div id="sidebar"
             class=" lg:hidden fixed top-0 left-[-10px] w-[80vw] h-full bg-white shadow-xl transform -translate-x-full overflow-y-auto transition-transform duration-300 ease-in-out z-40">
            <div class="px-10 py-7 md:px-20 md:py-12 select-none">
                <div class="flex items-start justify-between">
                    <h1 class="font-bold mb-4 text-3xl">Links</h1>
                    <img src="{{ asset('icons/closeIcon.svg') }} " alt="" width="30" id="close" class="cursor-pointer active:rotate-[360deg] duration-300 transition" >
                </div>
                <div id="services-link" class="block py-2 text-xl relative group">
                    <span class="flex justify-between items-center"><p>Services</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                    <div class="submenu hidden  py-2 px-4 mt-2">
                        <a href="/uk_facility" class="block py-2  text-sm hover:text-pink-950 transition-colors">Ukrainian bridge
                            facility</a>
                        <a href="/portfolio" class="block  py-2 text-sm  hover:text-pink-950 transition-colors">Portfolio / Gazelles</a>
                        <a href="/careers" class="block py-2  text-sm hover:text-pink-950 transition-colors">Careers</a>
                        <a href="/offices" class="block  py-2  text-sm hover:text-pink-950 transition-colors">Georgia's office</a>
                        <a href="https://gazellefinance.am/language/en/home/" target="_blank" class="block  text-sm  pt-2 hover:text-pink-950 transition-colors">Armenia's office</a>
                        <a href="/team" class="block pt-2 text-sm  hover:text-pink-950 transition-colors">Team</a>
                    </div>
                </div>
                <a href="/about" class="block py-2 text-xl relative group">
                    <span class="flex justify-between items-center"><p>About</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="/products" class="block py-2 text-xl relative group">
                <span class="flex justify-between items-center"><p>Products</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="#news" class="block py-2 text-xl relative group">
                <span class="flex justify-between items-center"><p>News</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="{{ env('APP_URL') }}/#contact_us" class="block py-2 text-xl relative group cursor-pointer">
                    <span class="flex justify-between items-center"><p>Contacts</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
                </a><a href="{{ env('APP_URL') }}/testimonials" class="block py-2 text-xl relative group cursor-pointer">
                    <span class="flex justify-between items-center"><p>Testimonials</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
                </a>
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
