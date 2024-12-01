<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=;, initial-scale=1.0">
    <title>Login To Cinerates</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-bg-main">
    <section class="flex justify-center my-24 mt-24" id="Home">
        <div class="container flex flex-col items-center md:flex-row md:justify-between">
            <div class="flex justify-center">
                <img src="\assets\img\poster-5.jpeg" class=" rounded-[16px] max-w-full">
            </div>
            <div class="text-center justify-center md:text-justify md:pl-0 sm:items-center sm:mx-10">
                <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">CineRates</h1>
                <h1 class="text-4xl text-white font-instrument-sans">Login To Cinerates</h1>
                <p class="mt-3 text-xl text-white font-instrument-sans">Your Best Film Review</p>
                <form class="">
                    <div class="pt-10">
                        <label for="Email" class="text-white font-instrument-sans" class="pb-10">Email </label> <br>
                        <input type="text" name="Email" id="Email" class="px-10 py-2 rounded-xl">
                    </div>
                    <div class="pt-10">
                        <label for="Password" class="text-white font-instrument-sans">Password</label> <br>
                        <input type="password" name="password" id="password" class="px-10 py-2 rounded-xl">
                    </div>
                    <div class="mt-10">
                        <button type="submit"  class="text-white bg-[#19ABE0] px-32 pt-[15px] pb-[15px] rounded-md text-2xl font-bold">Log In</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>
</html>
