<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<livewire:navigation/>
<main class="container mx-auto mt-8 mb-16 px-5 pb-5 pt-5">
    <div class="flex w-full">
        <div class="w-1/3 bg-white p-3 shadow-md rounded-md">
            <div>
                <h2 class="text-xl pb-2 font-semibold border-b border-gray-300">{{ __('Products') }}</h2>
            </div>
            <div class="flex mt-3">
                <ul class="flex w-full flex-col text-gray-700">
                    <li class="flex-1">
                        <a href="{{ route('products.create') }}" class="block w-full p-2 rounded-md hover:bg-gray-100 hover:text-blue-700">
                            <i class="fa-solid fa-plus mr-2"></i> {{ __('Create product') }}
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="{{ route('products.index') }}" class="block w-full p-2 rounded-md hover:bg-gray-100 hover:text-blue-700">
                            <i class="fa-solid fa-list mr-2"></i> {{ __('Products list') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@livewireScripts
</body>
</html>
