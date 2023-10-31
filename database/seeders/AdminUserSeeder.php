<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPassword = env('ADMIN_ACCESS');
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make($defaultPassword),
        ]);
    }
}
