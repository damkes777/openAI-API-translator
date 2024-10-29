<?php

namespace App\Livewire\Products;

use Illuminate\View\View;
use Livewire\Component;

class ProductCreate extends Component
{
    public function mount()
    {}

    public function render(): View
    {
        return view('products.create');
    }
}