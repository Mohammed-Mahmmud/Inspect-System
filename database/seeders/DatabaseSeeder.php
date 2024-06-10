<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PermissionsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // AdminSeeder::class,
            // UserSeeder::class,
            // ModeratorSeeder::class,
            // CompanySeeder::class,
            // RigSeeder::class,
            // orderSeeder::class,
            // PermissionsSeeder::class,
        ]);
    }
}
