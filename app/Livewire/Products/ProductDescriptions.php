<?php

namespace App\Livewire\Products;

use App\Services\TranslationServices\MultipleLanguagesTranslation;
use Illuminate\View\View;
use Livewire\Component;

class ProductDescriptions extends Component
{
    public const LANGUAGES = ['pl', 'en', 'de'];

    public string $description_pl = '';
    public string $description_en = '';
    public string $description_de = '';

    public function render(): View
    {
        return view('livewire.products.product-descriptions');
    }

    public function translate(MultipleLanguagesTranslation $languagesTranslation)
    {
        $translated = $languagesTranslation->translate(self::LANGUAGES, $this->description_pl);
        dd($translated);
    }
}