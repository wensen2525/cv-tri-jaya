<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','unAuthorized']);
    }
    public function index()
    {
        return view('home');
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
        return view('product');
    }
}
