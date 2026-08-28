<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dionatan',
            'email' => 'dionatan@teste.com',
            'password' => Hash::make('12345678'),
            'role' => UserRole::ADMIN,
        ]);

         User::create([
            'name' => 'Admir',
            'email' => 'adm1@teste.com',
            'password' => Hash::make('12345678'),
            'role' => UserRole::ADMIN,
        ]);

         User::create([
            'name' => 'Gabirel',
            'email' => 'gabirel@teste.com',
            'password' => Hash::make('12345678'),
            'role' => UserRole::CLIENTE,
        ]);
    }
}
