<form class="mx-auto">
    <div class="flex">
        <div>
            <x-form.input-label>{{ __('Product name') }}</x-form.input-label>
            <x-form.text-input id="product_name" name="product_name" placeholder="{{ __('Enter value') }}"/>
        </div>
        <div>
            <x-form.input-label>{{ __('Brand') }}</x-form.input-label>
            <x-form.text-input id="brand" name="brand" placeholder="{{ __('Enter value') }}"/>
        </div>
    </div>
</form>
