<?php

namespace App\Providers;

use App\Services\OpenAIApiServices\OpenAIApiServiceInterface;
use App\Services\TranslationServices\MultipleLanguagesTranslation;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(MultipleLanguagesTranslation::class, function ($app) {
            return new MultipleLanguagesTranslation($app->make(OpenAIApiServiceInterface::class));
        });
    }

    public function boot(): void
    {
    }
}
