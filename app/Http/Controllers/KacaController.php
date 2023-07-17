<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Http\Requests\StoreKacaRequest;
use App\Http\Requests\UpdateKacaRequest;

class KacaController extends Controller
{
    public function index()
    {
        $kacas = Kaca::all();
        return view('kacas.index', compact('kacas'));
    }

    public function create()
    {
        return view('kacas.create');
    }

    public function store(StoreKacaRequest $request)
    {
        Kaca::create($request->validated());
        return redirect()->route('kacas.index')->with('success', 'Kaca created successfully');
    }

    public function show(Kaca $kaca)
    {
        return view('kacas.show', compact('kaca'));
    }

    public function edit(Kaca $kaca)
    {
        return view('kacas.edit', compact('kaca'));
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
