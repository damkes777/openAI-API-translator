<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Collection;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ) {
    }

    public function create(array $data): Product
    {
        return $this->productRepository->create($data);
    }

    public function update(int $id, array $data): Product
    {
        return $this->productRepository->update($id, $data);
    }

    public function delete($id): void
    {
        $this->productRepository->delete($id);
    }

    public function all(): Collection
    {
        return $this->all();
    }

    public function find(int $id): Product
    {
        return $this->productRepository->find($id);
    }
}