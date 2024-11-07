<?php

namespace App\Repositories\ProductDescription;

use Illuminate\Support\Collection;

interface ProductDescriptionRepositoryInterface
{
    public function createMany(array $data): Collection;
}