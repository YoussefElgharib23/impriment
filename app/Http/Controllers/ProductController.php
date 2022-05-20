<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Valider les donnes envoyees par utilisateur
        $data = $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'quantity' => [
                'required',
                'numeric',
            ],
            'image' => [
                'required',
                'image',
            ],
            'reference' => [
                'required',
                'string',
            ],
        ]);

        // Upload the image
        $image = $request->file('image');
        $path = $image->store('products', 'public');

        Product::create(array_merge(
            $data,
            ['image' => $path]
        ));

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Valider les donnes envoyees par utilisateur
        $data = $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'quantity' => [
                'required',
                'numeric',
            ],
            'image' => [
                'required',
                'image',
            ],
            'reference' => [
                'required',
                'string',
            ],
        ]);

        // Upload the image
        $image = $request->file('image');
        if ($image) {
            $path = $image->store('products', 'public');
        } else {
            $path = $product->image;
        }

        $product->update(array_merge(
            $data,
            ['image' => $path]
        ));

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
