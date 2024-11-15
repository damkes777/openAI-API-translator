<x-layout>
    <x-slot:title>
        {{ __('Products list') }}
    </x-slot:title>
    <x-slot:header>
        {{ __('Products list') }}
    </x-slot:header>
    <div>
        <div class="w-full inline-flex flex-row-reverse mb-3">
            <a href="{{ route('products.create') }}">
                <x-button.primary type="button">{{ __('Create product') }}</x-button.primary>
            </a>

        </div>
        <livewire:products.products-list theme="tailwind"/>
    </div>
</x-layout>