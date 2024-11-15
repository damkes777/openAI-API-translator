<x-layout>
    <x-slot:title>
        {{ __('Products list') }}
    </x-slot:title>
    <x-slot:header>
        {{ __('Products list') }}
    </x-slot:header>
    <div>
        <livewire:products.products-list theme="tailwind"/>
    </div>
</x-layout>