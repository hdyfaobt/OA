<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@user.be'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // Joueurs
        $this->call(PlayerSeeder::class);

        // User::factory(10)->create();
        // Category::factory(5)->create();
        // Faq::factory(10)->create();
        // Article::factory(20)->create();
    }
}