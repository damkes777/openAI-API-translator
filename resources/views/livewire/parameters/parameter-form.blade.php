<div>
    <div class="flex flex-col w-full">
        <div class="mb-2 border-b border-gray-300 border-dashed">
            <span class="text-sm text-gray-400">{{ __('Base language (English)') }}</span>
        </div>
        <div class="flex mb-4">
            <div class="w-full mr-3">
                <x-form.input-label for="parameter_name_eng">{{ __('Name') }}</x-form.input-label>
                <x-form.input type="text" id="parameter_name_eng" name="parameter[eng][name]"
                              placeholder="{{ __('Enter parameter name') }}"/>
            </div>
        </div>
    </div>
    <div class="w-full inline-flex flex-row-reverse mb-8" wire:click="translate">
        <x-button.sm.secondary type="button">{{ __('Translate') }}</x-button.sm.secondary>
    </div>
    @if($translates)
        <div class="flex justify-center">
            <span class="text-gray-400">
                <i class="fa-solid fa-spinner animate-spin"></i>
                <span class="ml-1">{{ __('Translates...') }}</span>
            </span>
        </div>
    @else
        @foreach($this->getLanguages() as $language)
            <div class="flex flex-col w-full">
                <div class="mb-2 border-b border-gray-300 border-dashed">
                    <span class="text-sm text-gray-400">{{ __($language->fullName()) }}</span>
                </div>
                <div class="flex mb-4">
                    <div class="w-full mr-3">
                        <x-form.input-label
                                for="parameter_name_{{ $language->langId() }}">{{ __('Name') }}</x-form.input-label>
                        <x-form.input type="text" id="parameter_name_{{ $language->langId() }}"
                                      name="parameter[{{ $language->langId() }}][name]"
                                      placeholder="{{ __('Enter parameter name') }}"/>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>