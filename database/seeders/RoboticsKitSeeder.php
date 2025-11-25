<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('robotics_kits')->insert([
            [
                'name' => 'Arduino Starter Kit',
                'description' => 'Kit for beginners in electronics.',
                'price' => 999
            ],
            [
                'name' => 'Raspberry Pi 4 Kit',
                'description' => 'Complete set for SBC development.',
                'price' => 1899
            ],
            [
                'name' => 'Lego Mindstorms EV3',
                'description' => 'Educational robotics with Lego.',
                'price' => 7499
            ]
        ]);
    }
}
