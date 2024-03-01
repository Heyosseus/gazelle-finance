<x-layout>
    <x-header></x-header>
    <div class="p-10 ">
        <button class="hidden lg:block bg-gray-950 w-fit h-fit text-white py-1 px-2 rounded-lg ml-auto "><img id="openButton"
                                                                                                     src="{{ asset('icons/burgerMenu.svg') }}"
                                                                                                     alt="Burger Menu"
                                                                                                     width="30"
                                                                                                     class="cursor-pointer">
        </button>

        <h1 class="text-4xl text-center py-4">Ukraine bridge <span class="font-bold text-pink-950">facility</span></h1>
        <div class="w-44 h-px bg-black text-center mx-auto mb-10"></div>
        <p class="text-center w-full lg:w-1/2 mx-auto mb-20">With the support of its investors, GF will provide bridge financing
            and technical support to a select group of Ukrainian companies and their employees</p>
        <div class="flex flex-col lg:flex-row lg:justify-between lg:space-x-20">

            <div class="space-y-10">
                @foreach($UkraineBridgeFacility as $key => $facility)
                    <div
                        id="{{$facility->title}}"
                        class="flex flex-col xl:flex-row w-full justify-around items-{{$key % 2 ===0 ? 'start' : 'end'}}">
                        @if($key % 2 == 0)
                            <img src="{{$facility->image}}" alt=""
                                 class="hidden lg:block w-96  object-contain justify-between p-4">
                        @endif
                        <div
                            class="w-full xl:w-1/2 shadow-xl flex flex-col space-y-8 p-10 bg-{{ $key % 2 === 0 ? 'gray-950' : 'gray-50' }} rounded-xl">
                            <div class="flex justify-between items-start">

                                <h1 class="text-{{ $key % 2 === 0 ? 'white' : 'black' }} text-3xl font-bold">{{$facility->title}}</h1>
                                <div class="rounded-full bg-gray-300 p-3">
                                    <img src="{{asset('icons/attribution-pencil.svg')}}" alt="" width="20">
                                </div>
                            </div>
                            <p class="text-{{ $key % 2 === 0 ? 'gray-200' : 'black' }} lg:text-lg leading-8 tracking-wider">{{$facility->description}}</p>
                            <a href="{{ route('uk_facility.show', ['facility' => $facility->id]) }}"
                               class="text-{{ $key % 2 === 0 ? 'white' : 'black' }} border w-fit p-2 flex items-center space-x-2">
                                <p>See more </p>
                            </a>
                        </div>
                        @if($key % 2 !== 0)
                            <img src="{{$facility->image}}" alt=""
                                 class="hidden lg:block w-96 object-contain justify-between p-4">
                        @endif
                    </div>

                @endforeach
            </div>

            <div id="hiddenContent"
                 class="fixed inset-y-48  right-0 w-full xl:w-1/5 bg-pink-950 text-gray-300 overflow-y-auto px-6 py-4 rounded">
                <h1 class="text-3xl font-bold text-center text-white">Contents</h1>
                <div class="w-20 h-0.5 bg-white mx-auto "></div>
                @foreach($UkraineBridgeFacility as $key => $facility)
                    <div class="mt-4 space-y-3 cursor-pointer">
                        <a href="#{{$facility->title}}"
                           class="text-gray-300 flex items-center hover hover:text-white font-bold">
                            ∘ {{$facility->title}}
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
    <x-footer></x-footer>
</x-layout>
<style>
    #hiddenContent {
        transition: transform 0.5s ease-out;
        transform: translateX(100%);
    }

    #hiddenContent.open {
        transform: translateX(0);
    }
</style>
<script>
    document.getElementById('openButton').addEventListener('click', function () {
        document.getElementById('hiddenContent').classList.toggle('open');
    });
</script>
