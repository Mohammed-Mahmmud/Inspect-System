<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rig')->insert([
            'name' => "Serrano",
            'company_id' => 1,
            'location' => 'Quam ',
        ]);
        DB::table('rig')->insert([
            'name' => "Trading  ",
            'company_id' => 3,
            'location' => 'dolo',
        ]);
        DB::table('rig')->insert([
            'name' => "Olson",
            'company_id' => 5,
            'location' => 'incididunt',
        ]);
       
    }
}
