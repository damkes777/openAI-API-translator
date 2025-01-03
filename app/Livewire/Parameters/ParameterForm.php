<?php

namespace App\Livewire\Parameters;

use App\Enums\Languages;
use Illuminate\View\View;
use Livewire\Component;

class ParameterForm extends Component
{
    public bool $translates = false;

    public function render(): View
    {
        return view('livewire.parameters.parameter-form');
    }

    public function getLanguages(): array
    {
        return Languages::cases();
    }

    public function translate(): void
    {
        $this->translates = true;
    }
}