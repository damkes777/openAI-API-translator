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

    public function createDescriptions(array $data, int $id): Collection
    {
        $arrayKeys = array_keys($data);
        $languages = [];
        foreach ($arrayKeys as $arrayKey) {
            $languages[] = explode('_', $arrayKey)[1];
        }
        $descriptions = array_combine($languages, $data);
        $preparedData = [];
        foreach ($descriptions as $language => $description) {
            $preparedData[] = [
                'product_id' => $id,
                'language' => $language,
                'description' => $description,
            ];
        }

        return $this->productRepository->createDescriptions($preparedData, $id);
    }
}