<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['name' => 'California', 'country_id' => 1], // USA
            ['name' => 'Texas', 'country_id' => 1],
            ['name' => 'Ontario', 'country_id' => 2], // Canada
            // Add more states
        ]);        
    }
}
