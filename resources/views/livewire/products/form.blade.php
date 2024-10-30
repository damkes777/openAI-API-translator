<form class="flex flex-col w-full max-w-2xl mx-auto">
    <div class="flex flex-col w-full">
        <div class="mb-4">
            <x-form.input-label for="product_name">{{ __('Product name') }}</x-form.input-label>
            <x-form.input type="text" id="product_name" name="product_name"
                          placeholder="{{ __('Type product name') }}"/>
        </div>
        <div class="flex mb-4">
            <div class="w-full mr-3">
                <x-form.input-label for="brand">{{ __('Brand') }}</x-form.input-label>
                <x-form.input type="text" id="brand" name="brand"
                              placeholder="{{ __('Product brand') }}"/>
            </div>
            <div class="w-full">
                <x-form.input-label for="price">{{ __('Price') }}</x-form.input-label>
                <x-form.input type="number" id="price" name="price" placeholder="$ 99.99"/>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="w-full mr-3">
                <x-form.input-label for="quantity">{{ __('Quantity') }}</x-form.input-label>
                <x-form.input type="number" id="quantity" name="quantity" placeholder="0"/>
            </div>
            <div class="w-full">
                <x-form.input-label for="category">{{ __('Category') }}</x-form.input-label>
                <select id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>{{ __('Choice one') }}</option>
                </select>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="w-full mr-3">
                <x-form.input-label for="state">{{ __('State') }}</x-form.input-label>
                <select id="state" name="state"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>{{ __('Choice one') }}</option>
                </select>
            </div>
            <div class="w-full">
                <x-form.input-label for="return_politycy">{{ __('Return politycy') }}</x-form.input-label>
                <select id="return_politycy" name="return_politycy"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>{{ __('Choice one') }}</option>
                </select>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between">
                <x-form.input-label>{{ __("Descriptions") }}</x-form.input-label>
                <x-button.sm.secondary>{{ __('Translate') }}</x-button.sm.secondary>
            </div>
            <div class="mb-2">
                <label class="text-sm text-gray-400">{{ __('Polish') }}</label>
                <textarea id="pl_description" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="{{ __('Product description...') }}"></textarea>
            </div>
            <div class="mb-2">
                <label class="text-sm text-gray-400">{{ __('English') }}</label>
                <textarea id="en_description" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="{{ __('Product description...') }}"></textarea>
            </div>
            <div class="mb-2">
                <label class="text-sm text-gray-400">{{ __('German') }}</label>
                <textarea id="de_description" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="{{ __('Product description...') }}"></textarea>
            </div>
        </div>
    </div>
    <div class="inline-flex flex-row-reverse mt-12">
        <x-button.primary>
            {{ __('Save') }}
        </x-button.primary>
        <x-button.secondary>
            {{ __('Cancel') }}
        </x-button.secondary>
    </div>
</form>
