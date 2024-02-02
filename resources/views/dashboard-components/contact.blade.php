<div id="contact_us" class="flex flex-col  lg:flex-row justify-around bg-white px-4 lg:px-20 py-5 mb-40 mt-10 lg:mt-32">
    <div class="px-8 lg:px-5">
        <h1 class="uppercase tracking-wide text-center lg:text-start">connect with us</h1>
        <h1 class="text-4xl font-bold text-pink-950 tracking-wide mt-10">Turning Dreams into Reality</h1>

        <form action="">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="name" class="text-sm text-pink-950 font-bold mb-1">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-300 p-3 rounded-md"
                           placeholder="Enter your name">
                </div>
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="email" class="text-sm text-pink-950 font-bold mb-1">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-300 p-3 rounded-md"
                           placeholder="Enter your email">
                </div>
            </div>
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="company" class="text-sm text-pink-950 font-bold mb-1">Company</label>
                    <input type="text" name="company" id="company" class="border border-gray-300 p-3 rounded-md"
                           placeholder="Enter your company name">
                </div>
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="phone" class="text-sm text-pink-950 font-bold mb-1">Subject</label>
                    <input type="text" name="phone" id="phone" class="border border-gray-300 p-3 rounded-md"
                           placeholder="Share your ideas">
                </div>

            </div>

            <button
                class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white mt-10">
                <span>Send</span>
                {{--                <img class="group-hover:text-white" src="{{asset('icons/sendIcon.svg')}}" alt="" width="10">--}}
            </button>

        </form>
    </div>
    <div class="px-6">
        <h1 class="uppercase tracking-wide mt-10 text-center lg:text-start lg:mt-0">contact us</h1>
        <div class="w-16 m-auto lg:m-0 lg:w-full h-[1px] bg-pink-950 "></div>
        <div class="mt-10 sm:flex sm:flex-row items-center sm:justify-around lg:flex-col lg:items-start">
            <h1 class="text-4xl">Our <span class="font-bold text-pink-950 ">Email</span></h1>
            <div class="mt-6 ">
                <span>for Georgia:</span>
                <div>
                    <a href="mailto:admin@gazellefinance.com" class="font-bold text-pink-950 text-lg">admin@gazellefinance.com </a>
                </div>
                <div class="mt-6">
                    <span>for Armenia:</span>
                    <div><a href="mailto:armenia@gazellefinance.com" class="font-bold text-pink-950 text-lg">armenia@gazellefinance.com </a></div>
                </div>

                <div class="flex space-x-4 mt-10">
                    <a href="https://www.facebook.com/GazelleFinance/">
                        <img src="{{asset('icons/facebookIcon.svg')}}"
                             alt="" width="40" class="rounded-full">
                    </a>

                    <a href="https://twitter.com/GazelleFinance">
                        <img src="{{asset('icons/twitterIcon.svg')}}" alt=""
                             width="40" class="rounded-full"></a>

                    <a href="https://www.linkedin.com/company/gazelle-finance">
                        <img src="{{asset('icons/linkedinIcon.svg')}}" alt="" width="40" class="rounded-full">
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>
