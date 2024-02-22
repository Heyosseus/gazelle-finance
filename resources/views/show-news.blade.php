<x-layout>
    <x-header></x-header>
    <div class="p-8 lg:p-16 sm:h-[80vh]">
        <div class="flex flex-col">
            <div class="flex justify-between cursor-pointer">
                <div onclick="window.history.back();" class="flex items-center space-x-1"><img src="{{asset('icons/longLeftArrowIcon.svg')}}" alt="" width="20">
                    <p>Go back</p> </div>
                <h1 class="text-2xl text-left py-4">News Article</h1>
            </div>
            <div class="flex flex-col sm:flex-row justify-between mt-5 w-full shadow-lg p-2 sm:p-6">
                <div>
                    <img src="{{ $article->photo }}" alt="" class="w-full md:w-72 h-auto sm:h-56 object-fill">
                    <div class="flex items-center justify-between mt-4 sm:flex-col sm:items-start sm:mt-0">
                        <p class="mt-0 text-md sm:mt-2 lg:text-lg"><strong>Author:</strong> {{ $article->author }}</p>
                        <p class="text-md  lg:text-lg"><strong>Date:</strong> {{ $article->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="flex flex-col mt-8 sm:mt-0 space-y-10 w-full">
                    <div>
                        <h1 class="sm:text-xl font-bold uppercase text-3xl ml-2">{{ $article->title }}</h1>
                        <div class="w-full h-px bg-gray-300 mt-2 text-center"></div>
                    </div>
                    <p class="w-full text-md  md:text-lg ml-2">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
