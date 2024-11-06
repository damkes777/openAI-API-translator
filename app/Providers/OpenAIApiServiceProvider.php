<?php

namespace App\Providers;

use App\Services\OpenAIApiServices\OpenAIApiService;
use App\Services\OpenAIApiServices\OpenAIApiServiceInterface;
use Illuminate\Support\ServiceProvider;

class OpenAIApiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(OpenAIApiServiceInterface::class, OpenAIApiService::class);
    }

    public function boot(): void
    {
    }
}
