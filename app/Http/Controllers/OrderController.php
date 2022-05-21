<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'min:7',
                'max:255',
            ],
            'phone' => [
                'required',
                'min:7',
                'max:255',
            ],
            'quantity' => [
                'required',
                'numeric',
                'min:1',
            ],
            'product_id' => [
                'required',
                'numeric',
                'exists:products,id',
            ],
        ]);

        $client = User::create(array_merge(
            $request->except(['quantity', 'product_id']),
            ['role' => 'client']
        ));
        $client->commands()->create($request->except(['name', 'email', 'phone']));

        return redirect()->back();
    }
}
