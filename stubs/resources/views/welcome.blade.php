<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inter:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen flex flex-col justify-around"
     style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">
    <div class="flex flex-col items-center">
        <h1 class="text-4xl text-white font-semibold tracking-wide">
            Laravel
        </h1>

        <div class="rounded mt-5 flex items-center space-x-2 bg-black bg-opacity-25 text-white">
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://laravel.com/docs">Docs</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://laracasts.com">Laracasts</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://laravel-news.com">News</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://blog.laravel.com">Blog</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://nova.laravel.com">Nova</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://forge.laravel.com">Forge</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://vapor.laravel.com">Vapor</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://github.com/laravel/laravel">GitHub</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://tailwindcss.com">Tailwind CSS</a>
            <a class="py-2 px-4 rounded hover:bg-opacity-25 hover:bg-black transition-colors duration-100" href="https://github.com/alpinejs/alpine">Alpine.js</a>
        </div>
    </div>
</div>
</body>
</html>
