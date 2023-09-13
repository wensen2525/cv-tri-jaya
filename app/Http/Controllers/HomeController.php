<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kaca;
use App\Models\Jenis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function product()
    {
        // Retrieve the data related to kaca
        $kacas = Kaca::with(['jenis', 'ketebalan'])->get();
        $jenises = Jenis::all();
        // Pass the data to the 'product' view
        return view('product', compact('kacas', 'jenises'));
    }
}
