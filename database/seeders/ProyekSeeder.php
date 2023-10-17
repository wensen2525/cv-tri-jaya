<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //default
        DB::table('proyeks')->insert([
            [
                'nama' => 'Ruko Grand Galaxy Bekasi',
                'first_year' => '2016',
            ],
            [
                'nama' => 'Bank Kendari',
                'first_year' => '2017',
            ],
            [
                'nama' => 'Universitas Islam',
                'first_year' => '2019',
            ],
            [
                'nama' => 'Happy Puppy Kuningan City',
                'first_year' => '2019',
            ],
            [
                'nama' => 'Balai Besar Wilayah Sungai Citarum',
                'first_year' => '2020',
            ],
            [
                'nama' => 'Sekolah Kejaksaan Agung',
                'first_year' => '2022',
            ],
            [
                'nama' => 'Bintan',
                'first_year' => '2023',
            ],
            [
                'nama' => 'Happy Puppy Taman Palem',
                'first_year' => '2023',
            ],
            [
                'nama' => 'Mall Sumarecon Serpong',
                'first_year' => '2023',
            ],
        ]);
    }
}
