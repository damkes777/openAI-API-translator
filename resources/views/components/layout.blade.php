<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<livewire:navigation />
<main class="container bg-white mx-auto mt-8 p-5 rounded-md shadow-sm">
    <div>
        <h2 class="text-2xl font-extrabold dark:text-white">{{ $header }}</h2>
        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
    </div>
    {{ $slot }}
</main>
@livewireScripts
</body>
</html>
