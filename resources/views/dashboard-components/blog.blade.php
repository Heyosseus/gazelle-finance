<div class="flex flex-col items-center justify-center mt-12">
    <h1 class="text-3xl lg:text-5xl">Our <span class="font-bold text-pink-950">Blog</span>  </h1>
    <div class="w-20 h-0.5 bg-black mt-4"></div>

    <div class="flex flex-wrap justify-center p-4 lg:p-16">
        @foreach ($articles as $blog)

        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{$blog->photo}}" alt="" class="w-full  h-72 xl:w-96 object-fill rounded-t-lg cursor-pointer hover:scale-110 transition duration-500">
                <div class="p-6">
                    <div class="border py-2 px-4 w-fit mb-2 rounded-full border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white transition-colors cursor-pointer">{{$blog->category->title}}</div>
                    <h2 class="font-bold text-2xl text-gray-800 h-14">{{$blog->title}} </h2>
                    <a href="#" class="text-pink-950 font-semibold  mt-4 justify-end flex items-center space-x-2">
                        <p>Read more </p>
                        <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                    </a>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <a href="/news" class="rounded-full px-5 py-2 border bg-pink-950 text-white hover:bg-white hover:text-pink-950 hover:border-pink-950">See more</a>
</div>
<div class="w-full h-px bg-gray-300 mt-10"></div>
