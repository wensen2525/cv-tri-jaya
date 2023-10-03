<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kacas')->insert([
        
            [
                'jenis_id' => '1',
                'nama' => 'Dof',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '2',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Diamond',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '3',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Rattan',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '3',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Daun',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '3',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Truntum',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '3',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '3',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '4',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '4',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Es',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Kasumi',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Morgan',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            [
                'jenis_id' => '1',
                'nama' => 'Moru',
                'stok' => '2',
                'harga' => '23000',
                'ketebalan' => '5',
            ],
            
        ]);
    }
}
