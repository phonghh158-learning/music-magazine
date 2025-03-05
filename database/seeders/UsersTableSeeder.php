<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admintest',
            'email' => 'admintest@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'username' => 'usertest',
            'email' => 'usertest@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'username' => 'writertest',
            'email' => 'writertest@example.com',
            'password' => Hash::make('password'),
            'role' => 'writer',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
