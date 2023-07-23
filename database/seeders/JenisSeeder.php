<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenises')->insert([
            [
                'nama' => 'Polos',
            ],
            [
                'nama' => 'Warna',
            ],
            [
                'nama' => 'Reflektif',
            ],
            [
                'nama' => 'Motif',
            ],
            [
                'nama' => 'Cermin',
            ],
        ]);
    }
}
