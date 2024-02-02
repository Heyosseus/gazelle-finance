<div id="portfolio" class="flex flex-col justify-between h-full px-4 mt-20 lg:px-20 xl:px-32 ">
    <div class="flex lg:w-full mb-20 justify-center items-center">
        <h1 class="text-3xl lg:text-5xl border-b-2 py-2 w-fit border-pink-950 text-center">Our <span class="text-pink-950 font-bold">Gazelles</span></h1>
    </div>

    <div class="flex items-center justify-between xl:mt-10">
        <div class="hidden lg:flex flex-col items-start">
            <h1 class="text-2xl">If you're unfamiliar with <span class="text-pink-950 font-bold">Gazelles</span> </h1>
            <button id="showInfo" class="rounded-full px-5 py-2 border border-pink-950 mt-4 bg-white text-pink-950 hover:bg-pink-950 hover:text-white hover:border-white" onclick="bounceAnimation()">Read</button>
        </div>

        <div id="info" class=" w-full mx-8  text-md  xl:w-[700px] px-6 py-10 lg:p-12 rounded-lg shadow-2xl flex-col justify-start">
            <p>
                <div> <span class="text-pink-950 font-bold ">Gazelle</span> - nimble, fast, ability to accelerate quickly.</div>
                <br>

                Gazelles are fast growing small and medium sized enterprises (<em>SMEs</em>)  that have the potential to accelerate sales by 20 percent or more per year for more than a four year period.
                <br>
                <br>
                Gazelles constitute only 5-10 percent of all private companies, yet in typical years they create 50-80 percent of all net new jobs.
            </p>
        </div>


    </div>
    <div class="mt-20">
        <h1 class="rounded-full px-5 w-fit flex mx-auto py-2 border mt-4 bg-pink-950 text-white hover:bg-white hover:text-pink-950 hover:border-pink-950 cursor-pointer">See More</h1>
    </div>


</div>
<div class="w-full h-px bg-gray-300 mt-10"></div>

<script>
    function bounceAnimation() {
        const button = document.getElementById('info');
        button.classList.add('bounce-animate');
        button.addEventListener('animationend', () => {
            button.classList.remove('bounce-animate');
        }, { once: true });
    }
</script>
<style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-40px) scale(1.1);
        }
        60% {
            transform: translateY(-15px) scale(1.05);
        }
    }

    .bounce-animate {
        animation: bounce 1s ease-in-out;
    }
</style>
