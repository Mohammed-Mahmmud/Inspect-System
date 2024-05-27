<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    DB::table('users')->insert([
        'name' => "Mohamed Khater",
        'email' => 'khater@stc.com',
        'role' => 2,
        'password' => Hash::make('12345678'),
    ]);
    DB::table('users')->insert([
        'name' => "Ahmed Gaber",
        'email' => 'gaber@stc.com',
        'role' => 2,
        'password' => Hash::make('12345678'),
    ]);
    DB::table('users')->insert([
        'name' => "nour",
        'email' => 'NOUR@stc.com',
        'role' => 2,
        'password' => Hash::make('12345678'),
    ]);
    
    }
}
