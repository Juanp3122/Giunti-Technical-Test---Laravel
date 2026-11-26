<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'categories' => config('catalog.categories'),
            'products'   => config('catalog.products'),
        ]);
    }
}