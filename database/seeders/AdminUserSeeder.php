<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Asmae',
            'email' => 'asmae@gmail.com',
            'phone' => '0606060606',
            'role' => 'admin',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Zineb',
            'email' => 'zineb@gmail.com',
            'phone' => '0607060606',
            'role' => 'admin',
            'password' => Hash::make('123456'),
        ]);
    }
}
