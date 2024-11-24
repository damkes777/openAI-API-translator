<?php

namespace App\Livewire\Products;

use App\Helpers\PriceHelper;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\BooleanFilter;

class ProductsList extends DataTableComponent
{
    private const BUTTON_SECONDARY_CLASS = 'py-2 px-3 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700';
    private const BUTTON_DANGER_CLASS = 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900';

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
            ButtonGroupColumn::make(__('Actions'))
                             ->attributes(function () {
                                 return [
                                     'class' => 'space-x-2',
                                 ];
                             })
                             ->buttons([
                                 LinkColumn::make('View')
                                           ->title(fn() => __('Edit'))
                                           ->location(fn($row) => route('products.edit', $row->id))
                                           ->attributes(function () {
                                               return [
                                                   'class' => self::BUTTON_SECONDARY_CLASS,
                                               ];
                                           }),
                                 LinkColumn::make('View')
                                           ->title(fn() => __('Delete'))
                                           ->location(fn($row) => route('products.delete', $row->id))
                                           ->attributes(function () {
                                               return [
                                                   'class' => self::BUTTON_DANGER_CLASS,
                                               ];
                                           }),
                             ]),

        ];
    }
}