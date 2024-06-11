<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            'name' => "ECDC",
            'full_name' => 'Egyptian Chinese Development Company',
            'email' => 'ECDC@stc-eg.com',
            'password' => "DpkGI33461",
        ]);
        DB::table('company')->insert([
            'name' => "ST",
            'full_name' => 'Sinothrow',
            'email' => 'ST@stc-eg.com',
            'password' => "DpkGI33461",
        ]);
        DB::table('company')->insert([
            'name' => "HT",
            'full_name' => 'HI TECH',
            'email' => 'HT@stc-eg.com',
            'password' => "DpkGI33461",
        ]);
        DB::table('company')->insert([
            'name' => "SAKNAFTA",
            'full_name' => 'Saknafta',
            'email' => 'Saknafta@stc-eg.com',
            'password' => "DpkGI33461",
        ]);
    }
}
