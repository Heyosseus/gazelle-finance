<x-layout>
    <div class="flex items-center justify-between bg-pink-950 w-full px-4 lg:px-10 py-3">
        <img src="{{asset('assets/gazzele-logo.png')}}" alt="logo" class="lg:pl-12">
        <div class="hidden lg:flex justify-around lg:w-[800px] items-center">
            <nav class="flex space-x-8 text-white">
                <div class="group relative">
                    <div id="services" class="transition-colors duration-300 cursor-pointer text-lg">Services</div>
                    <div id="servicesDropdown"
                         class="hidden absolute left-0 mt-2 bg-white items-center space-x-6 shadow-md text-black rounded-md text-sm w-[460px]  transition-all ">
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Our work</h1>
                            <a href="#" class="block py-2 hover:text-pink-950 transition-colors">Gazelle finance</a>
                            <a href="#" class="block py-2 hover:text-pink-950 transition-colors">Ukrainian bridge
                                facility</a>
                            <a href="#" class="block pt-2 hover:text-pink-950 transition-colors">Social impacts</a>
                        </div>
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Company</h1>
                            <a href="#" class="block  py-2 hover:text-pink-950 transition-colors">Georgia's office</a>
                            <a href="#" class="block  py-2 hover:text-pink-950 transition-colors">Armenia's office</a>
                            <a href="#" class="block  pt-2 hover:text-pink-950 transition-colors">Team</a>
                        </div>

                    </div>
                </div>
                <a href="#" class=" transition-colors duration-300 text-lg">About</a>
                <a href="#" class=" transition-colors duration-300 text-lg">Products</a>
                <a href="#" class=" transition-colors duration-300 text-lg">News</a>
                <div class="group relative">
                    <div id="contact" class="transition-colors duration-300 cursor-pointer text-lg">Contact</div>
                    <div id="contactDropdown"
                         class="hidden align-center absolute left-0 mt-2 bg-white space-x-6 shadow-md text-black rounded-md text-sm w-[120px]  ml-[-10px] opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                        <div class="p-4 space-y-1">
                            <a href="#" class="block  hover:text-pink-950 transition-colors">Portfolio</a>
                            <a href="#" class="block py-2 hover:text-pink-950 transition-colors">Careers</a>
                            <a href="#" class="block pt-2 hover:text-pink-950 transition-colors">Contact us</a>
                        </div>
                    </div>
                </div>
            </nav>
            <select id="langs"
                    class="bg-pink-950 border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-2 px-3 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="En" class="rounded-2xl">En</option>
                <option value="Ka">Ka</option>
            </select>
        </div>

        <div class="block lg:hidden" id="burgerMenuBtn">
            <img src="{{ asset('icons/burgerMenu.svg') }}" alt="Burger Menu" width="40">
        </div>

        {{--        Mobile Menu--}}

        <div id="sidebar"
             class="fixed top-0 left-[-10px] w-[80vw] h-full bg-white shadow-xl transform -translate-x-full overflow-y-auto transition-transform duration-300 ease-in-out">
            <div class="px-10 py-7 md:px-20 md:py-10 select-none">
                <div class="flex items-start justify-between">
                    <h1 class="font-bold mb-4 text-3xl">Links</h1>
                    <img src="{{ asset('icons/closeIcon.svg') }} " alt="" width="30" id="close" class="cursor-pointer">
                </div>
                <a href="#services" class="block py-2 text-xl relative group">
                Services
                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="#about" class="block py-2 text-xl relative group"">
                About
                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="#products" class="block py-2 text-xl relative group"">
                Products
                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <a href="#news" class="block py-2 text-xl relative group"">
                News
                <span
                    class="absolute inset-x-0 bottom-0 h-[2px]  bg-pink-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
                </a>
                <span class="block py-2 text-xl relative group">
                    Contact
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
                </span>
            </div>
        </div>
    </div>
</x-layout>

<script>
    const services = document.getElementById('services');
    const contact = document.getElementById('contact');
    const servicesDropdown = document.getElementById('servicesDropdown');
    const contactDropdown = document.getElementById('contactDropdown');

    services.addEventListener('mouseenter', () => {
        servicesDropdown.classList.add('flex');
    });

    servicesDropdown.addEventListener('mouseleave', () => {
        servicesDropdown.classList.remove('flex');
    });

    contact.addEventListener('mouseenter', () => {
        contactDropdown.classList.add('flex');
    });

    contactDropdown.addEventListener('mouseleave', () => {
        contactDropdown.classList.remove('flex');
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Toggle the sidebar when the burger menu button is clicked
        const burgerMenuBtn = document.getElementById('burgerMenuBtn');
        const sidebar = document.getElementById('sidebar');

        burgerMenuBtn.addEventListener('click', function () {
            sidebar.classList.toggle('-translate-x-full');
        });

        const close = document.getElementById('close');
        close.addEventListener('click', function () {
            sidebar.classList.toggle('-translate-x-full');
        });
    });
</script>
