<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Http\Requests\StoreAlamatRequest;
use App\Http\Requests\UpdateAlamatRequest;

class AlamatController extends Controller
{
    public function index()
    {
        $alamats = Alamat::all();
        return view('alamats.index', compact('alamats'));
    }

    public function create()
    {
        return view('alamats.create');
    }

    public function store(StoreAlamatRequest $request)
    {
        Alamat::create($request->validated());
        return redirect()->route('alamats.index')->with('success', 'Alamat created successfully.');
    }

    public function show(Alamat $alamat)
    {
        return view('alamats.show', compact('alamat'));
    }

    public function edit(Alamat $alamat)
    {
        return view('alamats.edit', compact('alamat'));
    }

    public function update(UpdateAlamatRequest $request, Alamat $alamat)
    {
        $alamat->update($request->validated());
        return redirect()->route('alamats.index')->with('success', 'Alamat updated successfully.');
    }

    public function destroy(Alamat $alamat)
    {
        $alamat->delete();
        return redirect()->route('alamats.index')->with('success', 'Alamat deleted successfully.');
    }
}
