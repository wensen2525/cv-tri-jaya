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
        return view('home', compact('jasas'));
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
