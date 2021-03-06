<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        $clients = User::latest()->where('role', 'client')->get();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
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
            'email' => [
                'required',
                'string',
                'email',
                'min:7',
                'max:255',
                'unique:users',
            ],
            'phone' => [
                'required',
                'string',
                'min:7',
                'max:255',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'min:4',
                'max:255',
            ],
        ]);

        // Encoder le mot de passe
        $password = $data['password'];
        $hashedPassword = Hash::make($password);

        // Creer un client
        User::create(array_merge(
            $data,
            [
                'password' => $hashedPassword,
                'role' => 'client',
            ]
        ));
        
        return redirect()->route('clients.index');
    }

    public function edit(User $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, User $client)
    {
        // Valider les donnes envoyees par utilisateur
        $data = $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'min:7',
                'max:255',
                'unique:users,email,' . $client->id . ',id',
            ],
            'phone' => [
                'required',
                'string',
                'min:7',
                'max:255',
                'unique:users,email,' . $client->id . ',id',
            ],
            'password' => [
                'nullable',
                'string',
                'min:4',
                'max:255',
            ],
        ]);

        $hashedPassword = $client->password;

        if ($data['password']) {
            // Encoder le mot de passe
            $password = $data['password'];
            $hashedPassword = Hash::make($password);
        } 

        // Creer un client
        $client->update(array_merge(
            $data,
            [
                'password' => $hashedPassword,
                'role' => 'client',
            ]
        ));
        
        return redirect()->route('clients.index');
    }

    public function destroy(User $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
