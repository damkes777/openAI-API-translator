<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Collection;

interface ProductRepositoryInterface
{
    public function all(): Collection;

    public function create(array $data): Product;

    public function update(int $id, array $data): Product;

    public function delete(int $id): void;

    public function find(int $id): Product;
}