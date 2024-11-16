<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama a los seeders adicionales
        $this->call([
            HoraSeeder::class, // Seeder existente
            EdificioSeeder::class, // Nuevo seeder
            LugarSeeder::class, // Nuevo seeder
        ]);

        // Genera un usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
