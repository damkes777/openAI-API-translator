<?php

namespace App\Livewire\Parameters;

use App\Services\TranslationServices\MultipleLanguagesTranslation;
use Illuminate\View\View;
use Livewire\Component;

class ParameterLanguages extends Component
{
    public array $languages;
    public array $names = [];
    public array $values = [];

    public function mount(): void
    {
        $this->languages = config('languages');
    }

    public function render(): View
    {
        return view('livewire.parameters.languages');
    }

    public function translate(MultipleLanguagesTranslation $languagesTranslation): void
    {
        $this->names  = $languagesTranslation->translate($this->languages, $this->names);
        $this->values = $languagesTranslation->translate($this->languages, $this->values);
    }

    private function translateNames(MultipleLanguagesTranslation $languagesTranslation): array
    {
        return $languagesTranslation->translate($this->languages, $this->names);
    }

    private function translateValues(MultipleLanguagesTranslation $languagesTranslation): array
    {
        return $languagesTranslation->translate($this->languages, $this->values);
    }
}