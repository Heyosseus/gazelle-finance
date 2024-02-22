<x-layout>
    <x-header></x-header>
    <div class="p-5 md:p-10 ">
        <div class="space-y-3">
            <h1 class="text-2xl md:text-4xl text-center">Our <span class="font-bold text-pink-950">Impact Stories</span></h1>
            <div class="w-36 h-0.5 bg-gray-500 mx-auto "></div>
        </div>
        <p class="text-center md:text-lg md:mx-auto w-full xl:w-1/2 mt-10">We've been chosen by top agencies, startups, SMEs, and government organizations.
            Explore our recent projects and hear from our satisfied clients.</p>
            <div class="mt-20 flex flex-col lg:flex-row justify-evenly items-center  lg:space-x-5">
                @foreach($impacts as $impact)

                    <div class="w-full lg:w-1/3 bg-gray-50 ">
                        <div class="shadow-xl rounded-xl p-4">
                            <img src="{{asset('assets/quotes.png')}}" alt="quotes">
                            <p class="text-left py-4 text-wrap">"{{$impact->description}}"</p>
                            <div class="flex items-center ">
                                <img src="{{$impact->image}}" alt="image" class="bg-pink-950 w-28 h-28 object-contain rounded-full">
                                <h1 class="text-pink-950 mt-2 ml-2 text-center">{{$impact->author}}, <span class="text-sm uppercase font-bold">{{$impact->position}}</span></h1>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

    </div>
    <x-footer></x-footer>
</x-layout>
