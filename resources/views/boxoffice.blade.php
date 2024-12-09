<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                        <a href="{{route('topfilm')}}" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Home</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="#what-we-offer" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Feature</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="{{route('topfilm')}}" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Trending</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a href="{{route('boxoffice')}}" class="text-xl font-semibold text-white duration-500 font-instrument-sans hover:text-blue-400">Box Office</a>
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

    <section class="flex flex-col items-center justify-center mt-40 font-instrument-sans" id="Box Office">
        <div class=" sm:w-2/3 md:w-1/3 lg:w-1/5 h-16 bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex items-center justify-center w-11/12">
            <p class="text-xl font-semibold text-white font-instrument-sans">Box Office</p>
        </div>

        

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[500px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="flex flex-col text-white px-12 md:mt-0 mt-10">
                <div class="flex items-center font-instrument-sans">
                    <h1 class="font-bold text-3xl">Dedpol</h1>
                    <div class="flex ml-[230px]">
                        <img src="\assets\img\bintang.png" class="md:w-[25px] md:h-[25px] w-[20px] h-[20px]">
                        <p class="font-bold md:text-base text-xl">4.5/5</p>
                        <button class="ml-5 shadow-inner text-xs bg-white font-instrument-sans text-black font-semibold px-3 py-1 rounded">Get Started</button>
                    </div>
                </div>
                <p class="my-5 text-lg ">Weekend Gross: $113M | Total Gross: $128M | Weeks Released: 1</p>
                <p class="text-justify">A vivid reimagining of the classic The Wizard of Oz, Wicked spotlights the untold stories of Oz's most famous (or infamous) characters, namely the Wicked Witch of the West and her unlikely friend, Glinda the Good Witch. The show follows green-skinned star Elphaba from birth to college and 
                    through the life-changing events which eventually label her "wicked," introducing spoiled rich girl Glinda.</p>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[500px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="flex flex-col text-white px-12 md:mt-0 mt-10">
                <div class="flex items-center font-instrument-sans">
                    <h1 class="font-bold text-3xl">Dedpol</h1>
                    <div class="flex ml-[230px]">
                        <img src="\assets\img\bintang.png" class="md:w-[25px] md:h-[25px] w-[20px] h-[20px]">
                        <p class="font-bold md:text-base text-xl">4.5/5</p>
                        <button class="ml-5 shadow-inner text-xs bg-white font-instrument-sans text-black font-semibold px-3 py-1 rounded">Get Started</button>
                    </div>
                </div>
                <p class="my-5 text-lg ">Weekend Gross: $113M | Total Gross: $128M | Weeks Released: 1</p>
                <p class="text-justify">A vivid reimagining of the classic The Wizard of Oz, Wicked spotlights the untold stories of Oz's most famous (or infamous) characters, namely the Wicked Witch of the West and her unlikely friend, Glinda the Good Witch. The show follows green-skinned star Elphaba from birth to college and 
                    through the life-changing events which eventually label her "wicked," introducing spoiled rich girl Glinda.</p>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[500px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="flex flex-col text-white px-12 md:mt-0 mt-10">
                <div class="flex items-center font-instrument-sans">
                    <h1 class="font-bold text-3xl">Dedpol</h1>
                    <div class="flex ml-[230px]">
                        <img src="\assets\img\bintang.png" class="md:w-[25px] md:h-[25px] w-[20px] h-[20px]">
                        <p class="font-bold md:text-base text-xl">4.5/5</p>
                        <button class="ml-5 shadow-inner text-xs bg-white font-instrument-sans text-black font-semibold px-3 py-1 rounded">Get Started</button>
                    </div>
                </div>
                <p class="my-5 text-lg ">Weekend Gross: $113M | Total Gross: $128M | Weeks Released: 1</p>
                <p class="text-justify">A vivid reimagining of the classic The Wizard of Oz, Wicked spotlights the untold stories of Oz's most famous (or infamous) characters, namely the Wicked Witch of the West and her unlikely friend, Glinda the Good Witch. The show follows green-skinned star Elphaba from birth to college and 
                    through the life-changing events which eventually label her "wicked," introducing spoiled rich girl Glinda.</p>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[500px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="flex flex-col text-white px-12 md:mt-0 mt-10">
                <div class="flex items-center font-instrument-sans">
                    <h1 class="font-bold text-3xl">Dedpol</h1>
                    <div class="flex ml-[230px]">
                        <img src="\assets\img\bintang.png" class="md:w-[25px] md:h-[25px] w-[20px] h-[20px]">
                        <p class="font-bold md:text-base text-xl">4.5/5</p>
                        <button class="ml-5 shadow-inner text-xs bg-white font-instrument-sans text-black font-semibold px-3 py-1 rounded">Get Started</button>
                    </div>
                </div>
                <p class="my-5 text-lg ">Weekend Gross: $113M | Total Gross: $128M | Weeks Released: 1</p>
                <p class="text-justify">A vivid reimagining of the classic The Wizard of Oz, Wicked spotlights the untold stories of Oz's most famous (or infamous) characters, namely the Wicked Witch of the West and her unlikely friend, Glinda the Good Witch. The show follows green-skinned star Elphaba from birth to college and 
                    through the life-changing events which eventually label her "wicked," introducing spoiled rich girl Glinda.</p>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[500px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="flex flex-col text-white px-12 md:mt-0 mt-10">
                <div class="flex items-center font-instrument-sans">
                    <h1 class="font-bold text-3xl">Dedpol</h1>
                    <div class="flex ml-[230px]">
                        <img src="\assets\img\bintang.png" class="md:w-[25px] md:h-[25px] w-[20px] h-[20px]">
                        <p class="font-bold md:text-base text-xl">4.5/5</p>
                        <button class="ml-5 shadow-inner text-xs bg-white font-instrument-sans text-black font-semibold px-3 py-1 rounded">Get Started</button>
                    </div>
                </div>
                <p class="my-5 text-lg ">Weekend Gross: $113M | Total Gross: $128M | Weeks Released: 1</p>
                <p class="text-justify">A vivid reimagining of the classic The Wizard of Oz, Wicked spotlights the untold stories of Oz's most famous (or infamous) characters, namely the Wicked Witch of the West and her unlikely friend, Glinda the Good Witch. The show follows green-skinned star Elphaba from birth to college and 
                    through the life-changing events which eventually label her "wicked," introducing spoiled rich girl Glinda.</p>
            </div>
        </div>

    </section>
    
</body>
</html>