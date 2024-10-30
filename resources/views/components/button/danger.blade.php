@props(['disabled' => false])

@php
    $classes = $disabled ?
    'cursor-not-allowed opacity-50 focus:outline-none text-white bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:focus:ring-red-900' :
    'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'
@endphp

<button @disabled($disabled) {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>


