<x-layout>
    <x-header></x-header>
    <div class="p-10 ">

        <a href="/uk_facility">
            <img src="{{ asset('icons/longLeftArrowIcon.svg') }}" alt="go back" class="w-10 cursor-pointer"/>
        </a>
        <h1 class="text-4xl text-center py-4">Ukraine bridge <span class="font-bold text-pink-950">facility</span></h1>
        <div class="w-44 h-px bg-black text-center mx-auto mb-10"></div>
        <p class="text-center w-full lg:w-1/2 mx-auto mb-10">With the support of its investors, GF will provide bridge
            financing
            and technical support to a select group of Ukrainian companies and their employees</p>
        <div class="flex flex-col lg:flex-row lg:justify-between lg:space-x-20">

            <div class="space-y-10 lg:flex w-full justify-around lg:space-y-0">
                <div
                    class="flex flex-col xl:flex-row ">
                    <img src="{{$facility->image}}" alt=""
                         class="hidden lg:block w-96  object-contain justify-between p-4">
                </div>
                <div
                    class="w-full lg:w-1/2 shadow-xl flex flex-col space-y-3 p-10 bg-gray-50 rounded-xl">
                    <div class="flex justify-between items-start">

                        <h1 class="text-black text-3xl font-bold">{{$facility->title}}</h1>
                        <div class="rounded-full bg-gray-300 p-3">
                            <img src="{{asset('icons/attribution-pencil.svg')}}" alt="" width="20">
                        </div>
                    </div>
                    <p class="text-black lg:text-lg leading-8 tracking-wider"> {!! str_replace('<p>', '<p class="break-words">', $facility->description) !!}</p>
                </div>
            </div>


        </div>

    </div>
    <x-footer></x-footer>
</x-layout>

