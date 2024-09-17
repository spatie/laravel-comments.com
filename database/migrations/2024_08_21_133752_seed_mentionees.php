<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

return new class extends Migration {
    public function up(): void
    {
        $mentionees = [
            'Aaron',
            'Alex',
            'Amelia',
            'Caleb',
            'Chris',
            'Clementine',
            'Craig',
            'Daniel',
            'Ian',
            'Jef',
            'Jim',
            'Jimi',
            'Karen',
            'Lou',
            'Lucie',
            'Madeline',
            'Niels',
            'Olivia',
            'Rachel',
            'Rias',
            'Ruben',
            'Sebastian',
            'Sébastien',
            'Taylor',
            'Tim',
            'Wouter',
            'Zoe',
        ];

        foreach ($mentionees as $mentionee) {
            User::create([
                'name' => $mentionee,
                'email' => Str::kebab($mentionee) . '@example.com',
                'password' => '',
            ]);
        }
    }
};
