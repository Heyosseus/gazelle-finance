<div class="flex flex-col w-full lg:flex-row justify-around items-center px-4 space-x-4 lg:p-20 mt-20" id="partners">
    <div class="flex flex-col lg:w-1/2 items-center lg:items-start">
        <h1 class="text-3xl  lg:text-5xl border-b-2 py-2 border-pink-950 ">Our <span class="text-pink-950 font-bold">Partners</span>
        </h1>
        <p class="mt-10 text-lg text-center lg:text-start w-full xl:w-[500px] leading-8"><span
                class="text-pink-950 font-semibold "> Empowering </span> success through strategic partnerships, we
            collaborate to drive innovation and achieve shared
            goals. </p>
        <a href="#" class="text-pink-950 font-semibold mt-20 flex items-center space-x-2">
            <p>See more </p>
            <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
        </a>
    </div>

    <img src="{{asset('assets/community/gazelle-partners.png')}}" alt="" class="flex w-full lg:w-1/2 mt-10 xl:mt-0  h-auto rounded-md shadow-xl lg:ml-0 lg:mr-10">
</div>
<div
    class="carousel-container bg-gray-100 p-4 mt-20 lg:px-20 flex-col lg:flex lg:flex-row lg:justify-between items-center border-t-2 border-b-2 border-gray-200">
    <div class="flex items-center justify-between w-full carousel-track">
        <div class="w-40 carousel-card"><img src="{{asset('logos/nout.png')}}" alt=""></div>
        <div class="w-28 carousel-card "><img src="{{asset('logos/larar.png')}}" alt=""></div>
        <div class="w-40 carousel-card"><img src="{{asset('logos/sonati.png')}}" alt=""></div>
        <div class="w-32 carousel-card"><img src="{{asset('logos/apaga.jpg')}}" alt=""></div>
        <div class="w-36 carousel-card"><img src="{{asset('logos/gp.png')}}" alt=""></div>
        <div class="w-28 carousel-card"><img src="{{asset('logos/inpreso.png')}}" alt=""></div>
    </div>
</div>
<style>
    .carousel-container {
        display: flex;
        justify-content: space-between;
        overflow: hidden;
        position: relative;
        padding: 60px;
        border-color: #4b5563;
        width: 100%;
    }

    .carousel-card {
        display: flex;
        justify-content: space-between;
        &:hover {
            transform: scale(0.9);
            box-shadow: 5px 5px 8px rgba(222, 222, 222, 0.362),
            10px 10px 8px rgba(152, 133, 133, 0.392),
            15px 15px 8px rgba(139, 154, 139, 0.303);
        }
        border-radius: 20%;
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
            transform: translateX(calc(100% + 16px));
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>

