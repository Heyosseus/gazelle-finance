<x-layout>
    <x-header></x-header>
    <div class="p-5 md:p-10">
        <div class="space-y-3">
            <h1 class="text-2xl md:text-4xl text-center">Our <span class="font-bold text-pink-950">Gazelles</span></h1>
            <div class="w-36 h-0.5 bg-gray-500 mx-auto"></div>
        </div>
        <p class="text-center md:text-lg md:mx-auto w-full xl:w-1/2 mt-10">Gazelles constitute only 5-10 percent of all private companies, yet in
            typical years they create  50-80 percent of all net new jobs.</p>
        <div class="mt-20 flex flex-col justify-evenly items-center space-y-16">
            @foreach($portfolio as $index => $p)
                <div class="w-full flex justify-around items-stretch ">
                    @if($index % 2 == 0)
                        <img src="{{$p->image}}" alt="" class="hidden lg:block w-96 object-contain justify-between p-4">
                    @endif
                    <div class="shadow-xl bg-gray-50 flex flex-col w-full lg:w-1/2 justify-around items-start rounded-xl p-4">
                        <img src="{{asset('assets/quotes.png')}}" alt="quotes">
                        <p class="mt-2 text-2xl font-bold">{{$p->title}}</p>
                        <p class="text-left py-4 text-wrap">"{{$p->description}}"</p>
                        <div class="flex items-center w-full justify-between">
                            <div class="flex flex-col items-start text-sm">
                                <h1 class="text-pink-950 mt-2  text-center">Name: <span class="font-bold">{{$p->company}}</span> </h1>
                                <h1 class="text-pink-950 mt-2  text-center">Industry: <span class="font-bold">{{$p->industry}}</span> </h1>
                                <h1 class="text-pink-950 mt-2  text-center">Location: <span class="font-bold">{{$p->location}}</span> </h1>
                                <h1 class="text-pink-950 mt-2  text-center">Website:  <a href="https://{{$p->website_url}}" target="_blank" class="font-bold text-blue-600">{{$p->website_url}}</a></h1>
                            </div>
                            <img src="{{$p->logo}}" alt="image" class="w-28 h-28 object-contain ">
                        </div>
                    </div>
                    @if($index % 2 !== 0)
                        <img src="{{$p->image}}" alt="" class="hidden lg:block w-96 object-contain justify-between p-4">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
