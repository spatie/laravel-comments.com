<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'email' => 'guest@example.com',
            'name' => 'Guest',
        ]);

        User::factory()->create([
            'email' => 'freek@spatie.be',
            'name' => 'Freek',
        ]);
    }
}
