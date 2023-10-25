<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        return view('dashboard-admin',[
            'histories' => History::all()->take(10),
        ]);
    }
}
