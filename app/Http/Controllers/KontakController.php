<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Http\Requests\StoreKontakRequest;
use App\Http\Requests\UpdateKontakRequest;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('kontaks.index', compact('kontaks'));
    }

    public function create()
    {
        return view('kontaks.create');
    }

    public function store(StoreKontakRequest $request)
    {
        Kontak::create($request->validated());
        return redirect()->route('kontaks.index')->with('success', 'Kontak created successfully.');
    }

    public function show(Kontak $kontak)
    {
        return view('kontaks.show', compact('kontak'));
    }

    public function edit(Kontak $kontak)
    {
        return view('kontaks.edit', compact('kontak'));
    }

    public function update(UpdateKontakRequest $request, Kontak $kontak)
    {
        $kontak->update($request->validated());
        return redirect()->route('kontaks.index')->with('success', 'Kontak updated successfully.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontaks.index')->with('success', 'Kontak deleted successfully.');
    }
}
