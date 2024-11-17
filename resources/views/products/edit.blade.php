<x-layout>
    <x-slot:title>
        {{ __('Edit product') }}
    </x-slot:title>
    <x-slot:header>
        {{ __('Edit product') }}
    </x-slot:header>
    <div class="flex">
        <form method="post" action="{{ route('products.update') }}" class="flex flex-col w-full max-w-2xl mx-auto">
            @csrf
            <div class="flex flex-col w-full">
                <div class="mb-4">
                    <x-form.input-label for="name">{{ __('Product name') }}</x-form.input-label>
                    <x-form.input type="text" id="name" name="name"
                                  placeholder="{{ __('Type product name') }}" value="{{ $product['name'] }}"/>
                    @error('name') <span class="text-red-500"> {{ $message }}</span> @enderror
                </div>
                <div class="flex mb-4">
                    <div class="w-full mr-3">
                        <x-form.input-label for="brand">{{ __('Brand') }}</x-form.input-label>
                        <x-form.input type="text" id="brand" name="brand"
                                      placeholder="{{ __('Product brand') }}" value="{{ $product['brand'] }}"/>
                        @error('brand') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <x-form.input-label for="price">{{ __('Price') }}</x-form.input-label>
                        <x-form.input type="number" id="price" name="price" placeholder="$ 99.99"
                                      value="{{ $product['price'] }}"/>
                        @error('price') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-full mr-3">
                        <x-form.input-label for="quantity">{{ __('Quantity') }}</x-form.input-label>
                        <x-form.input type="number" id="quantity" name="quantity" placeholder="0"
                                      value="{{ $product['quantity'] }}"/>
                        @error('quantity') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <x-form.input-label for="category">{{ __('Category') }}</x-form.input-label>
                        <select id="category" name="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">{{ __('Choice one') }}</option>
                            <option value="category1">{{ __('Category 1') }}</option>
                            <option value="category2">{{ __('Category 2') }}</option>
                            <option value="category3">{{ __('Category 3') }}</option>
                        </select>
                        @error('category') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-full mr-3">
                        <x-form.input-label for="state">{{ __('State') }}</x-form.input-label>
                        <select id="state" name="state"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">{{ __('Choice one') }}</option>
                            <option value="new">{{ __('New') }}</option>
                            <option value="used">{{ __('Used') }}</option>
                        </select>
                        @error('state') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <x-form.input-label for="return_politycy">{{ __('Return politycy') }}</x-form.input-label>
                        <select id="return_politycy" name="return_politycy"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">{{ __('Choice one') }}</option>
                            <option value="0">{{ __('None') }}</option>
                            <option value="15">{{ __('15 days') }}</option>
                            <option value="30">{{ __('30 days') }}</option>
                        </select>
                        @error('return_politycy') <span class="text-red-500"> {{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="inline-flex flex-row-reverse mt-12">
                <x-button.primary type="submit">
                    {{ __('Save') }}
                </x-button.primary>
                <a href="{{ route('products.index') }}">
                    <x-button.secondary type="button">
                        {{ __('Cancel') }}
                    </x-button.secondary>
                </a>

            </div>
        </form>
    </div>
</x-layout>