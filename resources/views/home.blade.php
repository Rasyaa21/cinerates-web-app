<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-36">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="output.css">
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

    <header class="top-0 left-0 z-50 w-full pb-18" >
    </header>
    <main>
    <section class="flex justify-center my-24 mt-24" id="Home">
        <div class="container flex flex-col items-center md:flex-row md:justify-between">
            <div class="flex justify-center">
                <img src="\assets\img\image.png" class="w-[350px] md:w-[1200px] sm:w-[400px]">
            </div>
            <div class="px-12 text-center md:text-justify md:pl-0 sm:items-center sm:mx-10">
                <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">CineRates</h1>
                <p class="text-xl text-white font-instrument-sans">CineRates is a community-driven movie rating platform designed to help movie lovers discover their next favorite film.
                    Our dedicated team of movie enthusiasts curates a vast library of reviews, ratings, and recommendations. Join our community today and
                    let's talk movies!</p>
                <button class="text-xl shadow-inner bg-gradient-to-r from-[#1393ee] to-[#311fb0] font-instrument-sans text-white font-semibold duration-500 px-12 py-3.5 hover:bg-cyan-500 rounded mt-8">Get Started</button>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center mt-72" id="what-we-offer">

        <div class="shadow-[-10px_-10px_30px_4px_rgba(0,0,0,0.1),_10px_10px_30px_4px_rgba(0,0,0,0)] w-11/12 sm:w-2/3 md:w-1/3 lg:w-1/5 h-16 bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex items-center justify-center ">
            <p class="text-xl font-semibold text-white font-instrument-sans ">What We Offer</p>
        </div>

        <div class="flex flex-wrap items-center justify-around w-full px-12 mt-36">
            <div class="shadow-[-10px_-10px_30px_4px_rgba(0,0,0,0.1),_10px_10px_30px_4px_rgba(0,0,0,0)] w-full sm:w-1/3 md:w-1/4 lg:w-1/6 h-[300px] bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex justify-start mb-6">
                <div class="flex flex-col text-white pl-7 mt-7">
                    <div class="w-10 h-10 bg-white rounded-full"></div>
                    <h2 class="pt-10 text-xl font-bold text-left">Top Trending</h2>
                    <a class="pt-3">Find our top movies</a>
                    <a class="font-bold pt-14">Explore more</a>
                </div>
            </div>
            <div class="shadow-[-10px_-10px_30px_4px_rgba(0,0,0,0.1),_10px_10px_30px_4px_rgba(0,0,0,0)] w-full sm:w-1/3 md:w-1/4 lg:w-1/6 h-[300px] bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex justify-start mb-6">
                <div class="flex flex-col text-white pl-7 mt-7">
                    <div class="w-10 h-10 bg-white rounded-full"></div>
                    <h2 class="pt-10 text-xl font-bold text-left">Trending</h2>
                    <a class="pt-3">Watch the trending films</a>
                    <a class="font-bold pt-14">Explore more</a>
                </div>
            </div>
            <div class="shadow-[-10px_-10px_30px_4px_rgba(0,0,0,0.1),_10px_10px_30px_4px_rgba(0,0,0,0)] w-full sm:w-1/3 md:w-1/4 lg:w-1/6 h-[300px] bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex justify-start mb-6">
                <div class="flex flex-col text-white pl-7 mt-7">
                    <div class="w-10 h-10 bg-white rounded-full"></div>
                    <h2 class="pt-10 text-xl font-bold text-left">BlackBox Office</h2>
                    <a class="pt-3">Black Box Film is Hollywood</a>
                    <a class="font-bold pt-14">Explore more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center mt-40" id="trending">
        <div class="w-11/12 sm:w-2/3 md:w-1/3 lg:w-1/5 h-16 bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex items-center justify-center">
            <p class="text-xl font-semibold text-white font-instrument-sans">Trending Movies</p>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row md:justify-between mt-36">
            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\tayang_tidalwave_fight_localized_742x1100_da1d8b60.jpeg" class="w-[350px] md:w-[1100px] sm:w-[350px] rounded-[20px]">
            </div>
            <div class="px-12 text-center md:text-justify md:pl-0 sm:items-center sm:mx-36">
                <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">Deadpool & Wolverine</h1>
                <p class="py-10 text-xl text-white font-instrument-sans">Deadpool's peaceful existence comes crashing down when the Time Variance Authority recruits him to help safeguard the multiverse. He soon unites with his would-be pal, Wolverine, to complete the mission and save his world from an existential threat.</p>
                <div class="gap-12">
                    <button class="text-[22px] shadow-inner bg-gradient-to-r from-[#1393ee] to-[#311fb0] font-instrument-sans text-white font-semibold duration-500 px-20 py-3.5 hover:bg-cyan-500 rounded-[20px] mt-8 md:mr-3">4.3⭐️</button>
                    <button id="deadpool" class="text-[22px] shadow-inner bg-gradient-to-r from-[#1393ee] to-[#311fb0] font-instrument-sans text-white font-semibold duration-500 px-24 py-3.5 hover:bg-cyan-500 rounded-[20px] mt-4">Watch Trailer</button>
                </div>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-around mx-48 md:flex-row-reverse md:justify-between mt-36">

            <div class="flex justify-center m-2 mb-6">
                <img src="\assets\img\poster-6.jpeg" class="w-[350px] md:w-[1100px] sm:w-[350px] rounded-[20px]">
            </div>

            <div class="px-12 text-center md:text-justify md:pl-0 sm:items-center sm:mx-36">
                <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">Spiderman: Homecoming</h1>
                <p class="py-10 text-xl text-white font-instrument-sans">follows Peter Parker as he balances high school life with his secret identity as Spider-Man, eager to prove himself to Tony Stark while battling the Vulture, a villain using alien technology for dangerous purposes.</p>
                <div class="gap-12">
                    <button  class="text-[22px] shadow-inner bg-gradient-to-r from-[#1393ee] to-[#311fb0] font-instrument-sans text-white font-semibold duration-500 px-20 py-3.5 hover:bg-cyan-500 rounded-[20px] mt-8 md:mr-3">4.3⭐️</button>
                    <button id='spiderman' class="text-[22px] shadow-inner bg-gradient-to-r from-[#1393ee] to-[#311fb0] font-instrument-sans text-white font-semibold duration-500 px-24 py-3.5 hover:bg-cyan-500 rounded-[20px] mt-4">Watch Trailer</button>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center justify-around mt-40 font-instrument-sans" id="black-box-movies">
        <div class="shadow-[-10px_-10px_30px_4px_rgba(0,0,0,0.1),_10px_10px_30px_4px_rgba(0,0,0,0)] w-11/12 sm:w-2/3 md:w-1/3 lg:w-1/5 h-16 bg-gradient-to-r from-[#311FB0] to-[#2F80ED] rounded-[20px] flex items-center justify-center">
            <p class="text-xl font-semibold text-white font-instrument-sans">Black Box Movies</p>
        </div>

        <div class="flex flex-wrap items-center justify-around w-full px-12 mt-36">
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-3.jpeg" class="rounded-[16px] mb-4"">
                    <a class="text-2xl font-semibold text-center">The Day After Tommorow</a>
                </div>
            </div>
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-2.jpeg" class="rounded-[16px] mb-4">
                    <a class="text-2xl font-semibold text-center">Perempuan Tanah Jahanam</a>
                </div>
            </div>
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-1.jpeg" class="rounded-[16px] h-[350px] w-full mb-4">
                    <a class="text-2xl font-semibold text-center">Cek Toko Sebelah</a>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-around w-full px-12 mt-36">
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-4.jpeg" class="rounded-[16px] mb-4"">
                    <a class="text-2xl font-semibold text-center">Pamali</a>
                </div>
            </div>
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-5.jpeg" class="rounded-[16px] mb-4">
                    <a class="text-2xl font-semibold text-center">Beetlejuice 2</a>
                </div>
            </div>
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/6 rounded-[20px] flex justify-center mb-6">
                <div class="flex flex-col text-white pl-7">
                    <img src="\assets\img\poster-6.jpeg" class="rounded-[16px] h-[350px] w-full mb-4">
                    <a class="text-2xl font-semibold text-center">Spiderman Homecoming</a>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer>
        <section class="flex flex-col justify-around items-center font-instrument-sans bg-gradient-to-t from-[#432BF2]/90 from-0% to-[#000000]/15 from-78%">
            <div class="mt-24">
                <h3 class="text-3xl font-semibold text-white font-instrument-sans">CineRates</h3>
            </div>
            <div class="text-white font-instrument-sans justify-around w-[400px] flex flex-wrap items-center mt-12">
                <a href="#Home">Home</a>
                <a href="#Home">About</a>
                <a>Top Films</a>
                <a>Contact Us</a>
            </div>
            <div class="text-white font-instrument-sans justify-around w-[200px] flex flex-wrap items-center mt-12">
                <div class="w-[50px] h-[50px] bg-[#3A86FF] rounded-full items-center">
                    <div class="text-white font-instrument-sans font-bold pl-5 pt-[13px]">
                        <a>B</a>
                    </div>
                </div>
                <div class="w-[50px] h-[50px] bg-[#3A86FF] rounded-full items-center">
                    <div class="text-white font-instrument-sans font-bold pl-5 pt-[13px]">
                        <a>R</a>
                    </div>
                </div>
                <div class="w-[50px] h-[50px] bg-[#3A86FF] rounded-full items-center">
                    <div class="text-white font-instrument-sans font-bold pl-5 pt-[13px]">
                        <a>K</a>
                    </div>
                </div>
            </div>
            <div class="mt-16">
                <div class="h-[1px] w-96 bg-white"></div>
            </div>
            <div class="mt-16 mb-10 text-white font-instrument-sans">
                <p>Copyright CineRates Studio</p>
            </div>
        </section>
    </footer>
    <script src="\javascript\app.js"></script>
</body>
</html>
