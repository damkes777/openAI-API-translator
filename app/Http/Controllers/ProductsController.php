<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index()
    {

    }

    public function create(): View
    {
        return view('products.create');
    }
}
