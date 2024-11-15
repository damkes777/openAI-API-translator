<?php

namespace App\Livewire;

use App\Enums\NavigationItems;
use Illuminate\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public function render(): View
    {
        $navigationItems = NavigationItems::cases();

        return view('livewire.navigation', ['navigationItems' => $navigationItems]);
    }
}