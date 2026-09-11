<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gabi',
            'email' => 'gabi.basilio@teste.com',
            'password' => Hash::make('123456'),
            'role' => UserRole::ADMIN,
        ]);

        User::create([
            'name' => 'Admir',
            'email' => 'admin@teste.com',
            'password' => Hash::make('123456'),
            'role' => UserRole::ADMIN,
        ]);

        User::create([
            'name' => 'Gabriel',
            'email' => 'gabriel@teste.com',
            'password' => Hash::make('123456'),
            'role' => UserRole::CLIENTE,
        ]);
    }
}
