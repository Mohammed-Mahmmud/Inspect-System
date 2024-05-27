<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    // \App\Models\User::factory(10)->create();

    DB::table('users')->insert([
        'name' => "Admin",
        'email' => 'admin@stc.com',
        'role' => '1',
        'password' => Hash::make('123456789'),
    ]);

    }
}
