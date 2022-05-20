<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->latest()->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
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

        // Creer un user
        User::create(array_merge(
            $data,
            [
                'password' => $hashedPassword,
                'role' => 'admin',
            ]
        ));
        
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
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
                'unique:users,email,' . $user->id . ',id',
            ],
            'phone' => [
                'required',
                'string',
                'min:7',
                'max:255',
                'unique:users,email,' . $user->id . ',id',
            ],
            'password' => [
                'nullable',
                'string',
                'min:4',
                'max:255',
            ],
        ]);

        $hashedPassword = $user->password;

        if ($data['password']) {
            // Encoder le mot de passe
            $password = $data['password'];
            $hashedPassword = Hash::make($password);
        } 

        // Creer un user
        $user->update(array_merge(
            $data,
            [
                'password' => $hashedPassword,
                'role' => 'admin',
            ]
        ));
        
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
