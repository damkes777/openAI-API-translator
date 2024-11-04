<div>
    <div class="flex items-center justify-between">
        <x-form.input-label>{{ __("Descriptions") }}</x-form.input-label>
        <x-button.sm.secondary type="button">
            {{ __('Translate') }}
        </x-button.sm.secondary>
    </div>
    <div class="mb-2">
        <label class="text-sm text-gray-400">{{ __('Polish') }}</label>
        <textarea id="description_pl" rows="4"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="{{ __('Product description...') }}"></textarea>
        @error('description_pl') <span class="text-red-500"> {{ $message }}</span> @enderror
    </div>
    <div class="mb-2">
        <label class="text-sm text-gray-400">{{ __('English') }}</label>
        <textarea id="description_en" rows="4"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="{{ __('Product description...') }}"></textarea>
        @error('description_en') <span class="text-red-500"> {{ $message }}</span> @enderror
    </div>
    <div class="mb-2">
        <label class="text-sm text-gray-400">{{ __('German') }}</label>
        <textarea id="description_de" rows="4"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="{{ __('Product description...') }}"></textarea>
        @error('description_de') <span class="text-red-500"> {{ $message }}</span> @enderror
    </div>
</div>