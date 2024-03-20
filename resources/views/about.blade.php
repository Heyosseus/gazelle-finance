<x-layout>
    <x-header></x-header>
    <div class="w-full items-center justify-center mt-4  px-4 lg:px-32 py-8  rounded-lg  flex flex-col cursor-pointer">
        <h1 class="text-4xl">{{__('services.about')}} <span class="font-bold text-pink-950">{{__('services.us')}}</span></h1>
        <div class="w-20 h-[1px] bg-gray-950 mx-auto mt-2"></div>

        <div class="flex items-center justify-center xl:justify-between w-full mt-3">
            <div class="hidden xl:block ml-10 mt-20">
                <div class="flex flex-col rounded-xl border border-black py-2 px-5">
                    <h1 class="text-xl text-center">{{__('services.our')}} <span class="font-bold text-pink-950">{{__('services.story')}}</span></h1>
                </div>
                <div class="w-[0.5px] h-32 bg-black  mx-auto"></div>
                <div class="flex flex-col rounded-xl border border-black py-2 px-5">
                    <h1 class="text-xl">{{__('services.our')}} <span class="font-bold text-pink-950">{{__('services.mission')}}</span></h1>
                </div>
                <div class="w-[0.5px]  h-32 bg-black  mx-auto"></div>
                <div class="flex flex-col rounded-xl border border-black py-2 px-5">
                    <h1 class="text-xl">{{__('services.our')}} <span class="font-bold text-pink-950">{{__('services.vision')}}</span></h1>
                </div>
            </div>

            <div>
                <div class="w-full xl:w-[800px]  shadow-xl p-5 md:p-10 leading-8 rounded-xl">
                    <div class="block xl:hidden text-2xl text-center mb-6">{{__('services.our')}} <span class="font-bold text-pink-950">{{__('services.story')}}</span>
                    </div>
                    Gazelle Finance, launched in 2013 with Eurasia Foundation's support, targets high-growth SMEs in
                    Eurasia. The 2017 closure of Gazelle Fund LP, totaling $31M,
                    focuses on underserved SMEs with $200,000 to $1.0M in growth capital.
                    Through income participation loans and equity investments,
                    Gazelle Finance actively supports SMEs with high-growth potential, offering business development
                    services to overcome growth barriers.
                    The fund prioritizes diverse sectors and growth stages, fostering lasting partnerships for sustained
                    expansion.
                </div>
                <div class="w-full xl:w-[800px]  shadow-xl  p-5 md:p-10 leading-8 rounded-xl">
                    <div class="block xl:hidden text-2xl text-center mb-6">Our <span class="font-bold text-pink-950">Mission</span>
                    </div>
                    Our mission is to create a better financial future for capable entrepreneurs and communities they
                    serve.
                </div>
                <div class="w-full xl:w-[800px] shadow-xl  p-5 md:p-10 leading-8 rounded-xl">
                    <div class="block xl:hidden text-2xl text-center mb-6">Our <span class="font-bold text-pink-950">Vision</span>
                    </div>
                    To serve those markets with populations of entrepreneurs who are underserved by the local capital
                    markets, and then provide them with access to well - structured
                    financial instruments and know how to enable their companies not to just grow, but achieve their
                    ambitions to dominate their market segment.
                </div>
            </div>

        </div>

        <div class="h-full mt-20">
            <h1 class="text-4xl text-center">{{__('services.find_out_more')}} <span class="font-bold text-pink-950">{{__('services.about_us')}}</span></h1>
            <div class="w-60 h-[1px] bg-gray-950 mx-auto mt-2"></div>

            <div class="flex flex-col lg:flex-row justify-between mt-10 lg:space-x-4">
                <div class="w-full  xl:w-1/3 shadow-xl flex flex-col space-y-3   p-5 py-10  justify-between  rounded-xl">
                    <div class="flex justify-between  items-start">
                        <h1 class="text-pink-950 text-2xl font-bold  text-uppercase">{{__('services.careers')}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/briefcase-arrow-right.svg')}}" alt="" width="20" >
                        </div>
                    </div>
                    <p class="">Explore exciting career opportunities to join our dynamic team and discover your next
                        career move at Gazelle.
                    </p>
                    <div class="flex flex-col items-center w-full space-y-2 xl:flex-row xl:space-y-0 xl:space-x-2">

                    <a href="/careers" class="text-sm shadow border p-2 rounded w-full xl:w-fit  hover:text-gray-500 ">Join Us</a>
                        <a href="/careers" class="text-sm shadow border p-2  rounded w-full xl:w-fit  hover:text-gray-500">Explore
                            Opportunities</a>
                        <a href="/careers" class="text-sm shadow border p-2 rounded w-full xl:w-fit    hover:text-gray-500">Job
                            Openings</a>
                    </div>


                </div>
                <div class="w-full   xl:w-1/3 shadow-xl flex flex-col space-y-3  p-5 py-10  justify-between  rounded-xl">
                    <div class="flex justify-between  items-start">
                        <h1 class="text-pink-950 text-2xl font-bold text-uppercase">{{__('services.read')}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/videoconference.svg')}}" alt="" width="20" >
                        </div>

                    </div>
                    <p>Stay updated with Gazelle's latest insights and industry news. Explore our articles  to see how we're shaping SME investment and business growth.</p>
                    <div class="flex flex-col items-center w-full space-y-2 xl:flex-row xl:space-y-0 xl:space-x-2">

                    <a href="/news" class="text-sm shadow border p-2 rounded w-full xl:w-fit    hover:text-gray-500">Gazelles</a>
                        <a href="/news" class="text-sm shadow border p-2  rounded w-full xl:w-fit  hover:text-gray-500">Partners</a>
                        <a href="/news" class="text-sm shadow border p-2 rounded w-full xl:w-fit     hover:text-gray-500">Accelerate
                            with Us</a>
                    </div>
                </div>
                <div class="w-full  xl:w-1/3 shadow-xl flex flex-col space-y-3  p-5 py-10  justify-between  rounded-xl">
                    <div class="flex justify-between  items-start">
                        <h1 class="text-pink-950 text-2xl font-bold text-uppercase">{{__('services.we_are_here')}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/employees.svg')}}" alt="" width="20" >
                        </div>
                    </div>
                    <p class="">We are a team of seasoned professionals with significant global
                        and local business knowledge and deep SME investment expertise.</p>
                    <div class="flex flex-col items-center w-full space-y-2 xl:flex-row xl:space-y-0 xl:space-x-2">
                        <a href="/team" class="text-sm shadow border p-2  rounded w-full xl:w-fit  hover:text-gray-500">Our
                            Expertise</a>
                        <a href="/team" class="text-sm shadow border p-2 rounded  w-full xl:w-fit  hover:text-gray-500">Global
                            Insight</a>
                        <a href="/team" class="text-sm shadow border p-2 rounded   w-full xl:w-fit hover:text-gray-500">Local
                            Knowledge</a>
                    </div>
                </div>

            </div>

            <div class="mt-10 flex justify-between  flex-col lg:flex-row">
                <div class="w-full lg:w-1/2 shadow-xl flex flex-col space-y-3  p-5 py-10  justify-between  rounded-xl">
                    <div class="flex justify-between">
                        <h1 class="text-pink-950 text-2xl font-bold text-uppercase">{{__('services.products')}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/selling.svg')}}" alt="" width="20" >
                        </div>
                    </div>
                    <p class="">Our products are similar to private equity than bank financing, with terms appropriate
                        for gazelles, including risk-sharing, performance-based features. Given our higher risk profile,
                        we also expect higher returns.</p>
                    <div class="flex flex-col items-center w-full space-y-2 xl:flex-row xl:space-y-0 xl:space-x-2">
                    <a href="/products" class="text-sm shadow border p-2 rounded w-full xl:w-fit  hover:text-gray-500">
                            Equity-like Financing</a>
                        <a href="/products" class="text-sm shadow border p-2 rounded w-full xl:w-fit    hover:text-gray-500">Risk-sharing
                            Features</a>
                        <a href="/products" class="text-sm shadow border p-2 rounded w-full xl:w-fit  hover:text-gray-500">Higher
                            Returns</a>
                    </div>

                </div>
                <div
                    class="w-full  lg:w-1/3 shadow-xl flex flex-col space-y-3 p-5 py-10  justify-between bg-gray-950 rounded-xl">
                    <div class="flex justify-between">
                        <h1 class="text-white text-2xl font-bold text-uppercase">{{__('services.get_in_touch')}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/attribution-pencil.svg')}}" alt="" width="20" >
                        </div>

                    </div>
                    <p class="text-gray-200">Reach out to us to learn more about our services and how we can help your business thrive. Whether you're looking to partner with us, explore investment
                        opportunities, or simply have a question, we're here to help.</p>
                    <div class="flex flex-col items-center w-full space-y-2 xl:flex-row xl:space-y-0 xl:space-x-2">
                            <a href="{{ env('APP_URL') }}#contact_us" class="text-sm shadow border p-2 w-full  rounded text-white hover:text-gray-500">Contact
                            Us</a>
                        <a href="{{ env('APP_URL') }}#contact_us"
                           class="text-sm shadow border p-2 rounded  text-white w-full hover:text-gray-500">Join Our
                            Network</a>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <x-footer></x-footer>

</x-layout>

