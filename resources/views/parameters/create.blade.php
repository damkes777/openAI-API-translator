<x-layout>
    <x-slot:title>
        {{ __('Parameter create') }}
    </x-slot:title>
    <x-slot:header>
        {{ __('Parameter create') }}
    </x-slot:header>
    <div class="flex">
        <form method="post" action="{{ route('parameters.store') }}" class="flex flex-col w-full max-w-2xl mx-auto">
            @csrf
            <livewire:parameters.parameter-form />
        </form>
    </div>
</x-layout>