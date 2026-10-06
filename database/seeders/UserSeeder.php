<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('admin123'),
                'role' => UserRole::SuperAdmin,
            ]
        );

        if ($superAdmin->role !== UserRole::SuperAdmin) {
            $superAdmin->update([
                'role' => UserRole::SuperAdmin,
                'name' => 'Super Administrator',
            ]);
        }

        User::firstOrCreate(
            ['email' => 'editor@gmail.com'],
            [
                'name' => 'Admin Editor',
                'password' => Hash::make('admin123'),
                'role' => UserRole::Admin,
            ]
        );
    }
}
