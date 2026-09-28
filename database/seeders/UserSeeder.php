<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Cek berdasarkan email agar tidak duplicate
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // Ganti dengan password yang kamu mau
            ]
        );
    }
}