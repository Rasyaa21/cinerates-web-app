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
    <div class="justify-center items-center flex flex-col font-instrument-sans mt-12">
        <h1 class="mb-8 text-6xl font-bold text-white font-instrument-sans">CineRates</h1>
        <h1 class="text-4xl font-instrument-sans text-white">Login To Cinerates</h1>
        <p class="text-xl text-white font-instrument-sans mt-3">Your Best Film Review</p>
        <form>
            <div class="pt-10">
                <label for="Email" class="text-white font-instrument-sans">Email </label> <br>
                <input type="text" name="Email" id="Email">
            </div>
            <div class="pt-10">
                <label for="Password" class="text-white font-instrument-sans">Password </label> <br>
                <input type="password" name="password" id="password">
            </div>
        </form>
    </div>
</section>
</body>
</html>
</html>