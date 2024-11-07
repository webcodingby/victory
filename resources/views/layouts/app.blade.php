<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Theme | @yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Подключаем динамическую тему -->
    @vite('resources/js/app.js')
</head>
<body>
<header>
    <x-navigation />
</header>
<main class="<?=session('theme', 'classic')?>">
    @yield('content')
</main>
</body>
</html>
