<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function check()
    {
        if(auth()->user()->role == 'ADMIN'){
            return view('dashboard-admin');
        }elseif(auth()->user()->role == 'USER'){
            return view('dashboard-user');
        }else{
            return view('home')->with('error','Not Authorized!');
        }
    }

    public function product()
    {
        return view('product');
    }
}
