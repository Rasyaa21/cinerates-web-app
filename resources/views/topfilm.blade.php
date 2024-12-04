<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Films</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-bg-main">
    <nav id="nav">
        <div class="p-5 lg:px-32 md:px-4 sm:px-3">
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-white-grayish font-poppins">CineRates</span>
                <div class="md:hidden">
                    <button id="menu-btn" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>


                <ul id="menu" class="absolute left-0 z-10 hidden w-full transition-all duration-100 ease-in-out transform bg-blue-800 opacity-0 md:flex md:items-center md:static md:bg-transparent md:w-auto top-20 md:top-0 md:opacity-100 md:translate-y-0">
                    <li class="mx-4 my-6 md:my-0">
                        <a href="#Home" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Home</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="#what-we-offer" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Feature</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="#trending" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Trending</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="#black-box-movies" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Box Office</a>
                    </li>
                    <li class="my-6 md:my-0">
                        <button class="text-l bg-gradient-to-r from-[#1393ee] to-[#311fb0] mx-4 font-instrument-sans text-white font-semibold duration-500 px-6 py-2 hover:bg-cyan-500 rounded">
                            Get Started
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="flex flex-col items-center justify-center mt-40" id="trending">
        <div class=" sm:w-2/3 md:w-1/3 lg:w-1/5 h-16 bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex items-center justify-center w-11/12">
            <p class="text-xl font-semibold text-white font-instrument-sans">Trending Movies</p>
        </div>


        <div class="inline-grid lg:gap-20 md:gap-24 gap-20 mt-20 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
            <div class="flex flex-col">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[150px] lg:w-[300px] md:w-[250px] rounded-[20px]">
                <p class="font-instrument-sans text-xl font-bold text-white pt-3">Dedpollll</p>               
                <p class="font-instrument-sans text-white sm:text-sm md:text-xl">Mafia | Laga | Gangster</p>
                <div class="flex items-center pt-3">
                    <p class="font-instrument-sans text-white lg:mr-[130px] md:mr-[90px] mr-[30px] sm:w-[80px] sm:text-sm md:text-xl">2j 30m</p>
                    <img src="\assets\img\bintang.png" class="md:w-[30px] md:h-[30px] w-[20px] h-[20px]">
                    <p class="font-instrument-sans text-xl font-bold text-white sm:text-sm md:text-xl">4.75/5</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>