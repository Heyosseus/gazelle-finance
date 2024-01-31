<x-layout>
    <div class="flex items-center justify-between bg-pink-950 w-full px-10 py-2">
        <img src="{{asset('assets/gazzele-logo.png')}}" alt="logo">
        <div class="flex justify-between lg:w-[600px] items-center">
            <nav class="flex space-x-5 text-white">
                <div class="group relative">
                    <div class="transition-colors duration-300 cursor-pointer group-hover:opacity-100 group-focus:opacity-100">Services</div>
                    <div class="flex absolute left-0 mt-2 bg-white space-x-6 shadow-md text-black rounded-md text-sm w-[420px] ml-[-50px] opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Our work</h1>
                            <a href="#" class="block py-2">Gazelle finance</a>
                            <a href="#" class="block py-2">Ukrainian bridge facility</a>
                            <a href="#" class="block pt-2">Social impacts</a>
                        </div>
                        <div class="p-5 space-y-1">
                            <h1 class="text-lg font-bold pb-2">Company</h1>
                            <a href="#" class="block  py-2">Georgia's office</a>
                            <a href="#" class="block  py-2">Armenia's office</a>
                           <a href="#" class="block  pt-2" >Team</a>
                       </div>

                    </div>
                </div>
                <a href="#" class=" transition-colors duration-300">About</a>
                <a href="#" class=" transition-colors duration-300">Products</a>
                <a href="#" class=" transition-colors duration-300">News</a>
                <div class="group relative">
                    <div class="transition-colors duration-300 cursor-pointer">Contact</div>
                    <div class="flex align-center absolute left-0 mt-2 bg-white space-x-6 shadow-md text-black rounded-md text-sm w-[120px]  ml-[-10px] opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                        <div class="p-4 space-y-1">
                            <a href="#" class="block ">Portfolio</a>
                            <a href="#" class="block py-2">Careers</a>
                            <a href="#" class="block pt-2">Contact us</a>
                        </div>
                    </div>
                </div>
            </nav>
            <select class="">
                <option value="en" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">EN</option>
                <option value="ka" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">KA</option>
            </select>
        </div>

    </div>
</x-layout>
