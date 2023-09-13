<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Models\Jenis;
use App\Http\Requests\StoreKacaRequest;
use App\Http\Requests\UpdateKacaRequest;

class KacaController extends Controller
{
    public function index()
    {
        $kacas = Kaca::with(['jenis', 'ketebalan'])->get();
        $jenis_with_ketebalan = Jenis::with('ketebalan');
        return view('kacas.index', compact('kacas'));
    }

    public function create()
    {
        $jenises =  Jenis::all();
        return view('kacas.create', [

            'jenises' => $jenises
        ]);
    }

    public function store(StoreKacaRequest $request)
    {
        if ($request->validated()) {
            Kaca::create([

                'jenis_id' => $request->jenis_id,
                'nama' => $request->nama,
                'stok' => $request->stok,
                'harga' => $request->harga

            ]);
            return redirect()->route('kaca.index')->with('success', 'Kaca created successfully');
        } else {
            return redirect()->route('kaca.index')->with('not success', 'Kaca is not created successfully because have some problems');
        }
    }

    public function show(Kaca $kaca)
    {
        return view('kacas.show', compact('kaca'));
    }

    public function edit(Kaca $kaca)
    {
        // dd($kaca);
        $jenises = Jenis::all();

        // return
        return view('kacas.edit', [
            'jenises' => $jenises,
            'kaca' => $kaca
        ]);
    }

    public function update(UpdateKacaRequest $request, Kaca $kaca)
    {
        $kaca->update($request->validated());
        return redirect()->route('kacas.index')->with('success', 'Kaca updated successfully');
    }

    public function destroy(Kaca $kaca)
    {
        $kaca->delete();
        return redirect()->route('kacas.index')->with('success', 'Kaca deleted successfully');
    }
}
