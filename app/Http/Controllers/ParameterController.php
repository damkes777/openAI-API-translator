<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ParameterController extends Controller
{
    public function index()
    {}

    public function create(Request $request): View
    {
        return view('parameters.create');
    }

    public function edit()
    {}

    public function store()
    {}

    public function update()
    {}

    public function delete()
    {}
}