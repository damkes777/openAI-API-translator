<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductDescription;
use App\Services\Product\ProductService;
use App\Services\ProductDescriptionServices\ProductDescriptionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService,
    ) {
    }

    public function index()
    {
        return view('products.index');
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $product   = $this->productService->create($validated);

        $description = [
            'description_pl' => $validated['description_pl'],
            'description_en' => $validated['description_en'],
            'description_de' => $validated['description_de'],
        ];

        $this->productService->createDescriptions($description, $product->id);

        return redirect()->route('products.index');
    }
}
