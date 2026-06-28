<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'System Admin',
            'email'    => 'admin@pms.com',
            'password' => Hash::make('admin123'),
            'role'     => 'admin',
            'status'   => 'active',
        ]);

        User::create([
            'name'     => 'Dr. Rahim',
            'email'    => 'pharmacist@pms.com',
            'password' => Hash::make('pharma123'),
            'role'     => 'pharmacist',
            'status'   => 'active',
        ]);

        User::create([
            'name'     => 'Karim Mia',
            'email'    => 'cashier@pms.com',
            'password' => Hash::make('cash123'),
            'role'     => 'cashier',
            'status'   => 'active',
        ]);
    }
}