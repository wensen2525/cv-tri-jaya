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
        DB::table('jenis')->insert([
            [
                'nama' => 'Polos',
                'deskripsi' => 'Merupakan produk komoditi dalan perdagangan kaca. Banyak digunakan untuk ragam jenis bangunan seperti perkantoran, pergudangan, perumahan, cafe dan lainnya. Memiliki varian ketebalan dan ukuran yang beragam.',
            ],
            [
                'nama' => 'Warna',
                'deskripsi' => 'Terdiri dari banyak warna yang cocok untuk keperluan interior maupun eksterior bangunan anda. Menambah kesan artistik ruangan anda baik dari dalam maupun dari luar. Pastikan pilihan anda tepat sehingga mendapatkan hasil yang maksimal.',
            ],
            [
                'nama' => 'Reflektif',
                'deskripsi' => 'Kaca yang memiliki lapisan khusus sehingga dapat menimbulkan kesan seperti cermin namun tetap dapat melihat di belakang lapisan kaca. Jadikan bangunan anda lebih berkesan serta dapat meningkatkan privasi ruangan anda.',
            ],
            [
                'nama' => 'Motif',
                'deskripsi' => 'Umum digunakan untuk rak atau etalase dapur. Memiliki banyak variasi motif. Menjadikan ruang dapur anda lebih hidup.',
            ],
            [
                'nama' => 'Cermin',
                'deskripsi' => 'Hasil dari proses kaca yang diberikan lapisan cat khusus dan diberikan perlakuan tertentu sehingga dapat menimbulkan sifat reflektif sempurna. Cermin juga memiliki beberapa variasi dari jumlah lapisan cat, warna lapisan cat, serta warna cermin itu sendiri.',
            ],
        ]);
    }
}
