<?php

namespace App\Livewire\Products;

use Illuminate\View\View;
use Livewire\Component;

class ProductCreate extends Component
{
    public function render(): View
    {
        return view('livewire.products.form');
    }
}