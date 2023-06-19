<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.dev',
        ]);

        User::factory(50)->create();

        Game::factory()
            ->count(10)
            ->hasPlayers(10)
            ->create();
    }
}
