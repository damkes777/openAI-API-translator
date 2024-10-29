<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductDescription;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index()
    {

    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $product = Product::query()->create([
            'name' => $validated['name'],
            'price_net' => $validated['price_net'],
            'quantity' => $validated['quantity'],
        ]);



        return redirect()->route('products.index');
    }
}
