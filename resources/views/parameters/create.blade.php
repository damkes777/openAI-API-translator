<x-layout>
    <x-slot:title>
        {{ __('Parameter create') }}
    </x-slot:title>
    <x-slot:header>
        {{ __('Parameter create') }}
    </x-slot:header>
    <div class="flex">
        <form method="post" action="{{ route('parameters.store') }}" class="flex flex-col w-full max-w-2xl mx-auto">
            @method('PUT')
            @csrf

            <div class="flex flex-col w-full">
                <div class="mb-2 border-b border-gray-300 border-dashed">
                    <span class="text-sm text-gray-400">{{ __('Base language (ENG)') }}</span>
                </div>
                <div class="flex mb-4">
                    <div class="w-full mr-3">
                        <x-form.input-label for="parameter_name_eng">{{ __('Name') }}</x-form.input-label>
                        <x-form.input type="text" id="parameter_name_eng" name="parameter[eng][name]"
                                      placeholder="{{ __('Enter parameter name') }}"/>
                        @error('parameter_name_eng') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <x-form.input-label for="parameter_value_eng">{{ __('Value') }}</x-form.input-label>
                        <x-form.input type="text" id="parameter_value_eng" name="parameter[eng][value]"
                                      placeholder="{{ __('Enter parameter value') }}"/>
                        @error('price') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="inline-flex flex-row-reverse">
                <x-button.sm.secondary type="button">{{ __('Translate') }}</x-button.sm.secondary>
            </div>
        </form>
    </div>
</x-layout>