<?php

namespace App\Providers;

use App\Repositories\ProductDescription\ProductDescriptionRepository;
use App\Repositories\ProductDescription\ProductDescriptionRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Services\Product\ProductService;
use App\Services\ProductDescriptionServices\ProductDescriptionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ProductService::class, function ($app) {
            return new ProductService($app->make(ProductRepositoryInterface::class));
        });

        $this->app->bind(ProductDescriptionRepositoryInterface::class, ProductDescriptionRepository::class);
        $this->app->bind(ProductDescriptionService::class, function ($app) {
            return new ProductDescriptionService($app->make(ProductDescriptionRepositoryInterface::class));
        });
    }

    public function boot(): void
    {
        //
    }
}
