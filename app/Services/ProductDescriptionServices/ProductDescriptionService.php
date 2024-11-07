<?php

namespace App\Services\ProductDescriptionServices;

use App\Repositories\ProductDescription\ProductDescriptionRepository;

class ProductDescriptionService
{
    public function __construct(
        protected ProductDescriptionRepository $descriptionRepository
    ) {
    }

    public function createMany(array $data, int $productId)
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
                'product_id' => $productId,
                'language' => $language,
                'description' => $description,
            ];
        }

        return $this->descriptionRepository->createMany($preparedData);
    }
}