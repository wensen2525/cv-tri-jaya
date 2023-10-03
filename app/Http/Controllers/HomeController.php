<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kaca;
use App\Models\Jenis;
use App\Models\Proyek;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','product','project','unAuthorized']);
    }
    public function index()
    {
        $jasas = [
            [
                'title' => 'Gosok Kaca',
                'body' => "Proses ini adalah membuat pinggiran atau sisi kaca maupun cermin yang umumnya tajam dihaluskan agar tidak membahayakan serta meningkatkan tampilan lebih baik.\n\nKami memiliki 2 jenis proses penggosokan sisi kaca yakni penggosokan secara manual yang dioperasikan oleh manusia dan menggunakan mesin secara otomatis.",
                'index' => 1
            ],
            [
                'title' => 'Tempered',
                'body' => "Kaca dipanaskan pada titik tinggi serta didinginkan setelahnya. Proses ini membuat kaca lebih kuat dan tahan terhadap tekanan fisik. Umumnya digunakan pada eksterior, pintu, jendela serta tempat lainnya.\n\nKelebihan dari proses ini adalah jika kaca pecah akan menghasilkan fragment yang lebih kecil dan tidak tajam sehingga dapat meminimalkan dampak serius pada manusia.",
                'index' => 2
            ],
            [
                'title' => 'Cut Sized/ Potongan',
                'body' => 'Kaca atau cermin yang kita potong berdasarkan ukuran yang diinginkan oleh konsumen.',
                'index' => 3
            ],
            [
                'title' => 'Laminate Glass',
                'body' => "Kaca disatukan dengan kaca lainnya menggunakan pengikat yang umumnya yaitu plastik seperti polivinyl butyral (PVB) atau ehtylene-vinyl acetate (EVA). Kaca diberikan tekanan dan suhu tinggi menghasilkan kaca yang kuat dan tahan terhadap tekanan fisik.\n\nTingkat keamanan laminate glass sangat tinggi karena jika pecah umumnya akan menempel pada lapisan kaca pada sisi lainnya yang menempel. Banyak digunakan pada kaca kendaraaan, pintu kaca, jendela dan keperluan lainnya.",
                'index' => 4
            ],
            [
                'title' => 'Sandblasting',
                'body' => "Proses kaca dibuat buram dengan menggunakan tekanan air dan pasir pada permukaannya. Kaca sandblasting bagus untuk digunakan pada interior ruangan karena dapat meningkatkan estetika serta dapat digunakan untuk privasi.",
                'index' => 5
            ],
            [
                'title' => 'Isolated Glass',
                'body' => "Terdiri dari dua kaca atau lebih yang dipisahkan ruangan udara atau gas yang biasanya adalah argon atau krypton.\n\nKaca isolasi dibuat untuk mencegah atau setidaknya mengurangi perpindahan panas yang tinggi ke dalam maupun ke luar ruangan.",
                'index' => 6
            ]
            ];

        $lokasis = [
            [
                'img' => 'lokasi1',
                'nama' => 'Jl. Kemiri
                No.51 Pondok Cabe Udik, Pamulang, Tangerang Selatan, Banten 15418',
                'link' => 'https://www.google.com/maps/place/CV+TRI+JAYA/@-6.3566538,106.7491487,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ef1143dce2bb:0x778ff404f4a9f656!8m2!3d-6.3566592!4d106.7540196!16s%2Fg%2F11bcdbgnft?entry=ttu'
            ],
            [
                'img' => 'lokasi2',
                'nama' => 'Ruko Sawangan
                Megah, No. 9, Jl. Raya Parung - Ciputat, Kedaung, Kec. Sawangan,
                Kota Depok, Jawa Barat 16517',
                'link' => 'https://www.google.com/maps/place/Tri+Jaya+Kaca+%26+Aluminium/@-6.3738788,106.7441055,18z/data=!4m14!1m7!3m6!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!2sTri+Jaya+Kaca+%26+Aluminium!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd!3m5!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd?entry=ttu'
            ]
        ];
        $galeris = [
            [
                'img' => 'home-location',
                'link' => '#lokasi',
                'title' => 'LOKASI'
            ],
            [
                'img' => 'home-mesin',
                'link' => '#alatproduksi',
                'title' => 'ALAT PRODUKSI'
            ],
            [
                'img' => 'home-produk',
                'link' => '/product',
                'title' => 'PRODUK'
            ],
            [
                'img' => 'home-project',
                'link' => '/project',
                'title' => 'PROYEK'
            ]
        ];
        return view('home', compact('jasas','lokasis','galeris'));
    }

    public function unAuthorized()
    {
        return redirect()->route('login')->with('error','Not Authorized!');
    }

    public function check()
    {
        if(auth()->user()->role === 'ADMIN'){
            return view('dashboard-admin');
        }elseif(auth()->user()->role === 'USER'){
            return view('dashboard-user');
        }else{
            return redirect()->route('login')->with('error','You\'re Unknown!');
        }

        return redirect()->route('login')->with('testing', 'function not work!');

    }


    public function product()
    {
        // Retrieve the data related to kaca
        $kacas = Kaca::all();
        $jenises = Jenis::all();
        // Pass the data to the 'product' view
        return view('product', compact('kacas', 'jenises'));
    }

    public function project(){
        //pass proyek and sort Descent
        $proyeks = Proyek::all()->sortByDesc('first_year');
        return view('project', compact('proyeks'));
    }
}
