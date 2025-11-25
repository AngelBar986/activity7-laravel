<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('robotics_kits')->insert([
            [
                'name' => 'StarterKit',
                'kit_code' => 'SK01',
                'description' => 'Basic robotics starter kit'
            ],
            [
                'name' => 'Educational Robotics Kit',
                'kit_code' => 'ERK01',
                'description' => 'Kit for programming robots'
            ],
            [
                'name' => 'Kit5',
                'kit_code' => 'K500',
                'description' => 'Advanced robotics kit'
            ],
        ]);
    }
}
