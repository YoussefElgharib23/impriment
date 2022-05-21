<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function services()
    {
        return view('front.services');
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('front.products', compact('products'));
    }
}
