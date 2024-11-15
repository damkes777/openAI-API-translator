<?php

namespace App\Livewire\Products;

use App\Helpers\PriceHelper;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\BooleanFilter;

class ProductsList extends DataTableComponent
{

    public function configure(): void
    {
        $this->model = Product::class;
        $this->setPrimaryKey('id');
    }

    public function filters(): array
    {
        return [
            BooleanFilter::make(__('Available products'))
                         ->filter(function (Builder $builder, bool $enabled) {
                             if ($enabled) {
                                 $builder->where('quantity', '>', 0);
                             }
                         }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), 'id')
                  ->sortable(),
            Column::make(__('Brand'), 'brand')
                  ->searchable(),
            Column::make(__('Price'), 'price')
                  ->format(fn($value, $row, Column $column) => PriceHelper::intToFloat($row->price))
                  ->sortable(),
            Column::make(__('Quantity'), 'quantity')
                  ->sortable(),
            Column::make(__('Category'), 'category')
                  ->searchable()
                  ->format(fn($value, $row, Column $column) => $row->category ?? 'N/A'),

            Column::make(__('State'), 'state')
                  ->searchable()
                  ->format(fn($value, $row, Column $column) => $row->state ?? 'N/A'),
            Column::make(__('Return politycy'), 'return_politycy')
                  ->sortable()
                  ->searchable()
                  ->format(fn($value, $row, Column $column) => $row->return_politycy ?? 'N/A'),

        ];
    }
}