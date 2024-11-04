<?php

namespace App\Repositories;

use App\Helpers\PriceHelper;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository implements ProductRepositoryInterface
{

    public function all(): Collection
    {
        return Product::all();
    }

    public function create(array $data): Product
    {
        $data['price'] = PriceHelper::floatToInt($data['price']);

        return Product::create($data);
    }

    public function update(int $id, array $data): Product
    {
        $product       = Product::findOrFail($id);
        $data['price'] = PriceHelper::floatToInt($data['price']);
        $product->update($data);

        return $product;
    }

    public function delete(int $id): void
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }

    public function find(int $id): Product
    {
        return Product::findOrFail($id);
    }
}