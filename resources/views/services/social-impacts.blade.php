<x-layout>
    <x-header></x-header>
    <div class="p-5 md:p-10 ">
        <div class="space-y-3">
            <h1 class="text-2xl md:text-4xl text-center">Our <span class="font-bold text-pink-950">Impact Stories</span></h1>
            <div class="w-36 h-0.5 bg-gray-500 mx-auto "></div>
        </div>
        <p class="text-start sm:text-center md:text-lg  mt-10">Gazelles constitute only 5-10 percent of all private companies, yet in
            typical years they create  50-80 percents of all net new jobs.</p>
            <div class="mt-20 flex flex-col lg:flex-row justify-evenly items-center  lg:space-x-5">
                @foreach($impacts as $impact)

                    <div class="w-full lg:w-1/3">
                        <div class="shadow-xl rounded-xl p-4">
                            <img src="{{asset('assets/quotes.png')}}" alt="quotes">
                            <p class="text-left py-6 text-wrap">"{{$impact->description}}"</p>
                            <div>
                                <img src="{{$impact->image}}" alt="image" class="bg-pink-950 w-32 h-32 object-contain rounded-full">
                                <h1 class="text-pink-950 mt-2 text-center">{{$impact->author}}</h1>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

    </div>
    <x-footer></x-footer>
</x-layout>
