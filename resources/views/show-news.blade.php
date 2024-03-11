<x-layout>
    <x-header></x-header>
    <div class="p-8 lg:p-16 ">
        <div class="flex flex-col">
            <div class="flex justify-between cursor-pointer">
                <div onclick="window.history.back();" class="flex items-center space-x-1"><img src="{{asset('icons/longLeftArrowIcon.svg')}}" alt="" width="20">
                    <p>Go back</p> </div>
                <h1 class="text-2xl text-left py-4">News Article</h1>
            </div>
            <div class="flex flex-col md:flex-row justify-between mt-5 w-full shadow-lg p-2 sm:p-6">
                <div class="w-1/2 ">
                    <img src="{{ $article->photo }}" alt="" class="w-full md:w-72 h-auto sm:h-56 object-fill">
                    <div class="flex items-center justify-between mt-4 sm:flex-col sm:items-start sm:mt-0">
                        <p class="mt-0 text-md sm:mt-2 lg:text-lg"><strong>Author:</strong> {{ $article->user?->name ?? 'Gazelle Finance' }}</p>
                        <p class="text-md  lg:text-lg"><strong>Date:</strong> {{ $article->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="flex flex-col mt-8 md:mt-0 space-y-10 w-full md:w-1/2 flex-grow">
                    <div>
                        <h1 class="sm:text-xl font-bold uppercase text-3xl">{{ $article->title }}</h1>
                        <div class="w-full h-px bg-gray-300 mt-2 text-center"></div>
                    </div>
                    <p class="w-full text-md  md:text-lg  break-words">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
