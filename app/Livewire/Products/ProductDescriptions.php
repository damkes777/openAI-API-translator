<?php

namespace App\Livewire\Products;

use Illuminate\View\View;
use Livewire\Component;

class ProductDescriptions extends Component
{
    public string $pl_description;
    public string $en_description;
    public string $de_description;

    public function render(): View
    {
        return view('livewire.products.product-descriptions');
    }

    public function translate()
    {

    }
}