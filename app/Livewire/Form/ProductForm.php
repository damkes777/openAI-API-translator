<?php

namespace App\Livewire\Form;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate(['required|string|max:255'])]
    public $product_name;

    #[Validate(['required|string|max:255'])]
    public $brand;

    #[Validate('required|numeric|min:0|not_in:0')]
    public $price;

    #[Validate('required|numeric|min:0')]
    public $quantity;

    #[Validate('required|string|max:255')]
    public $category;

    #[Validate('required|string|max:255')]
    public $state;

    #[Validate('required|int|min:0')]
    public $return_politycy;

    #[Validate('nullable|string')]
    public $pl_description;

    #[Validate('nullable|string')]
    public $en_description;

    #[Validate('nullable|string')]
    public $de_description;
}