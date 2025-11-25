<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            [
                'name' => 'Group Alpha',
                'user_id' => 1,
            ],
            [
                'name' => 'Group Beta',
                'user_id' => 1,
            ],
            [
                'name' => 'Group Gamma',
                'user_id' => 1,
            ],
        ]);
    }
}
