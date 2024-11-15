<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)
     ->group(function () {
         Route::get('products/list', 'index')
              ->name('products.index');
         Route::get('products/create', 'create')
              ->name('products.create');
         Route::post('products/store', 'store')
              ->name('products.store');
     });

