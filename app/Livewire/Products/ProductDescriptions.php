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

    public function translate(MultipleLanguagesTranslation $languagesTranslation): void
    {
        $translated = collect($languagesTranslation->translate(self::LANGUAGES, $this->description_pl)
                                                   ->first());

        $this->description_pl = $translated->where('sentence_language', 'pl')
                                           ->first()['sentence'];
        $this->description_en = $translated->where('sentence_language', 'en')
                                           ->first()['sentence'];
        $this->description_de = $translated->where('sentence_language', 'de')
                                           ->first()['sentence'];
    }
}