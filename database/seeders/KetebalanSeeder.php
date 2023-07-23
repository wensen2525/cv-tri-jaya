<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KetebalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ketebalans')->insert([
            [
                'tebal' => 5.5,
            ],
            [
                'tebal' => 2,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 3,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 4,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 5,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 6,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 8,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 10,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 12,
                'jenis_id' => 1,
            ],
            [
                'tebal' => 2,
                'jenis_id' => 5,
            ],
            [
                'tebal' => 3,
                'jenis_id' => 5,
            ],
            [
                'tebal' => 5,
                'jenis_id' => 5,
            ],
            
        ]);
    }
}
