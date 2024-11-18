<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ParameterController;

Route::get('/', function () {
    return view('dashboard');
})
     ->name('dashboard');

Route::controller(ProductController::class)
     ->prefix('products')
     ->group(function () {
         Route::get('/delete/{id}', 'delete')
              ->where('id', '[1-9][0-9]*')
              ->name('products.delete');
         Route::get('/edit/{id}', 'edit')
              ->where('id', '[1-9][0-9]*')
              ->name('products.edit');
         Route::get('products', 'index')
              ->name('products.index');
         Route::get('/create', 'create')
              ->name('products.create');
         Route::put('/store', 'store')
              ->name('products.store');
         Route::post('/update', 'update')
              ->name('products.update');
     });

Route::controller(ParameterController::class)
     ->prefix('parameters')
     ->group(function () {
         Route::get('/', 'index')
              ->name('parameters.list');
         Route::get('/create', 'create')
              ->name('parameters.create');
         Route::get('/edit/{id}', 'edit')
              ->where('id', '[1-9][0-9]*')
              ->name('parameters.edit');
         Route::put('/store', 'store')
              ->name('parameters.store');
         Route::put('/update', 'update')
              ->name('parameters.update');
         Route::delete('/delete/{id}')
              ->where('id', '[1-9][0-9]*')
              ->name('parameters.delete');
     });

