<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'guest@example.com'],
            ['name' => 'Guest', 'password' => ''],
        );

        User::firstOrCreate(
            ['email' => 'freek@spatie.be'],
            ['name' => 'Freek', 'password' => ''],
        );
    }
}
