<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat admin account
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@balilady.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);

        // Buat beberapa test account
        User::create([
            'name' => 'Manager Bali Lady',
            'email' => 'manager@balilady.com',
            'password' => Hash::make('manager123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Staff Bali Lady',
            'email' => 'staff@balilady.com',
            'password' => Hash::make('staff123'),
            'email_verified_at' => now(),
        ]);
    }
}
