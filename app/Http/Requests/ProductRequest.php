<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|not_in:0',
            'quantity' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'return_politycy' => 'nullable|int|min:0',
            'description_pl' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_de' => 'nullable|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
