<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admon',
                'email' => 'admin@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Administrative'
            ],
            [
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Teacher'
            ],
            [
                'name' => 'Student',
                'email' => 'student@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Student'
            ],
        ]);
    }
}
