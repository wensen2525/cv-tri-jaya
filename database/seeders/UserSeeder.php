<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'AdminTRIJAYA',
                'email' => 'handycahyono@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('250tolife'),
                'role' => 'ADMIN'
            ]
        ]);
    }
}
