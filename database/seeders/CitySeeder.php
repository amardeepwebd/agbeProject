<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Los Angeles', 'state_id' => 1], // California
            ['name' => 'Houston', 'state_id' => 2], // Texas
            ['name' => 'Toronto', 'state_id' => 3], // Ontario
            // Add more cities
        ]);        
    }
}
