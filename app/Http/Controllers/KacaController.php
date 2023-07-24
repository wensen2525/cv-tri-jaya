<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Http\Requests\StoreKacaRequest;
use App\Http\Requests\UpdateKacaRequest;
use App\Models\Jenis;

class KacaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $kacas = Kaca::with(['jenis','ketebalan'])->get();
        $jenis_with_ketebalan = Jenis::with('ketebalan');
        return view('kacas.index', compact('kacas'));
    }

    public function create()
    {
        // ambil data dari database lewat models
        $jenises = Jenis::all();

        // return
        return view('kacas.create',[
            'jenises' => $jenises,
        ]);
    }

    public function store(StoreKacaRequest $request)
    {
        if($request->validated()){
            Kaca::create([
                'jenis_id' => $request->jenis,
                'nama' => $request->nama,
                'stok' => $request->stok,
                'harga' => $request->harga,
            ]);
            return redirect()->route('kaca.index')->with('success', 'Kaca created successfully');
        }else{
            return redirect()->route('kaca.index')->with('not success', 'Kaca is not created successfully because have some problems');
        }
        
        
    }

    public function show(Kaca $kaca)
    {
        return view('kaca.show', compact('kaca'));
    }

    public function edit(Kaca $kaca)
    {
        return view('kacas.edit', compact('kaca'));
    }

    public function update(UpdateKacaRequest $request, Kaca $kaca)
    {
        $kaca->update($request->validated());
        return redirect()->route('kaca.index')->with('success', 'Kaca updated successfully');
    }

    public function destroy(Kaca $kaca)
    {
        $kaca->delete();
        return redirect()->route('kaca.index')->with('success', 'Kaca deleted successfully');
    }
}
