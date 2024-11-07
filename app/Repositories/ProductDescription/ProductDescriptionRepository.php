<?php

namespace App\Repositories\ProductDescription;

use App\Models\ProductDescription;
use Illuminate\Support\Collection;

class ProductDescriptionRepository implements ProductDescriptionRepositoryInterface
{

    public function createMany(array $data): Collection
    {
        return ProductDescription::createMany($data);
    }
}