<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=;, initial-scale=1.0">
    <title>Login To Cinerates</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-bg-main">
<section class="flex justify-center items-center pb-[100px] gap-[400px] mt-24">
    <div class="sm:w-1/3 md:w-1/4 lg:w-1/6  flex justify-center mt-[100px]">
        <div class="flex flex-col text-white pl-7">
            <img src="\assets\img\poster-5.jpeg" class="max-w-full rounded-[16px] w-[2500px]">
        </div>
    </div>
    <div class="flex flex-col items-center justify-center mt-12 font-instrument-sans">
        <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">CineRates</h1>
        <h1 class="text-4xl text-white font-instrument-sans">Login To Cinerates</h1>
        <p class="mt-3 text-xl text-white font-instrument-sans">Your Best Film Review</p>
        <form class="items-center justify-center">
            <div class="pt-10">
                <label for="Email" class="text-white font-instrument-sans">Email </label> <br>
                <input type="text" name="Email" id="Email">
            </div>
            <div class="pt-10">
                <label for="Password" class="text-white font-instrument-sans">Password</label> <br>
                <input type="password" name="password" id="password">
            </div>
            <div class="items-center justify-center mt-10">
                <button type="submit"  class="text-white bg-[#19ABE0] pl-[30px] pr-[30px] pt-[15px] pb-[15px] rounded-md">Log In</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
</html>
