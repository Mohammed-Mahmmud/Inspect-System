<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'name' => "Kelly ",
            'key' => 100,
            'user_id' => 2,
            'company_id' => 1,
            'rig_id' => 1,
            
        ]); 
        DB::table('orders')->insert([
            'name' => "Co",
            'key' => 100,
            'user_id' => 4,
            'company_id' => 3,
            'rig_id' => 2,
            
        ]); 
        DB::table('orders')->insert([
            'name' => "Larsen",
            'key' => 100,
            'user_id' => 5,
            'company_id' => 4,
            'rig_id' => 8,
            
        ]); DB::table('orders')->insert([
            'name' => "tesing",
            'key' => 100,
            'user_id' => 6,
            'company_id' => 5,
            'rig_id' => 9,
            
        ]); 
    }
}
