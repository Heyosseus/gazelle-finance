<div class="flex flex-col w-full lg:flex-row justify-around items-center px-4 space-x-4 lg:p-20 mt-10" id="partners">
    <div class="flex flex-col lg:w-1/2 items-center lg:items-start">
        <h1 class="text-3xl  lg:text-5xl border-b-2 py-2 border-pink-950 ">Our <span class="text-pink-950 font-bold">Partners</span>
        </h1>
        <p class="mt-10 text-lg text-center lg:text-start w-full xl:w-[500px] leading-8"><span
                class="text-pink-950 font-semibold "> Empowering </span> success through strategic partnerships, we
            collaborate to drive innovation and achieve shared
            goals. </p>
        <a href="/portfolio" class="text-pink-950 font-semibold mt-20 flex items-center space-x-2">
            <p>See more </p>
            <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
        </a>
    </div>

    <img src="{{asset('assets/community/gazelle-partners.png')}}" alt="" class="flex w-full lg:w-1/2 mt-10 xl:mt-0  h-auto rounded-md shadow-xl lg:ml-0 lg:mr-10">








</div>
<div class="carousel-container bg-black p-4 mt-10 lg:px-20 lg:flex lg:flex-row lg:justify-between items-center border-t-2 border-b-2 border-gray-200">
    <div class="flex items-center justify-between w-full carousel-track">
        @foreach($logos as $logo)
            <div class="w-40 carousel-card"><img src="{{$logo}}" alt=""></div>
        @endforeach
    </div>
</div>

<style>
    .carousel-container {
        display: flex;
        justify-content: space-between;
        overflow: hidden;
        position: relative;
        padding: 100px;
        border-color: #4b5563;
        width: 100%;
        background-color: #500724;
    }

    .carousel-card {
        display: flex;
        justify-content: space-between;
        &:hover {
            transform: scale(0.9);
            cursor:pointer;
        }
        border-radius: 20%;
    }

    .carousel-card > img {
        border-radius: 15px;
    }


    .carousel-track {
        display: flex;
        position: absolute;
        left: 0;
        justify-content: space-around;
        align-items: center;
        gap: 16px;
        width: 100%;
        animation: slide 20s linear infinite backwards;
        &:hover {
            animation-play-state: paused;
        }
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>

