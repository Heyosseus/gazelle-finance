<x-layout>
    <x-header>
    </x-header>
    <div class="p-8 lg:p-16 flex flex-col xl:flex-row justify-between space-y-5 xl:space-x-5 ">

        <div class="w-full flex flex-col ">
            <h1 class="text-4xl  py-4 text-center">Our <span class="font-bold text-pink-950">Team</span></h1>
            <div class="w-20 h-px bg-gray-300 text-center mx-auto"></div>

            <p class="mt-6 text-center mx-auto w-full lg:w-1/2">We are a team of seasoned professionals with significant
                global and local business knowledge and deep SME investment expertise.</p>
        </div>
    </div>
    <div class="container mx-auto pt-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-10 xl:px-28 mx-auto">
            @foreach($employees->chunk(4) as $chunk)
                @foreach($chunk as $employee)
                    <div class="p-4 flex flex-col items-center justify-center lg:items-start lg:justify-items-start">
                        <img src="{{$employee->image}}" alt="team" class="w-32 h-32 rounded-full object-fill mb-2">
                        <h1 class="text-2xl py-1 text-left text-pink-950 font-bold">{{$employee->employee_name}}</h1>
                        <p class="text-left">{{$employee->position}}</p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>

