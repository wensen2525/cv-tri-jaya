<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Http\Requests\StoreBahanRequest;
use App\Http\Requests\UpdateBahanRequest;

class BahanController extends Controller
{
    public function index()
    {
        $bahans = Bahan::all();
        return view('bahans.index', compact('bahans'));
    }

    public function create()
    {
        return view('bahans.create');
    }

    public function store(StoreBahanRequest $request)
    {
        Bahan::create($request->validated());
        return redirect()->route('bahans.index')->with('success', 'Bahan created successfully.');
    }

    public function show(Bahan $bahan)
    {
        return view('bahans.show', compact('bahan'));
    }

    public function edit(Bahan $bahan)
    {
        return view('bahans.edit', compact('bahan'));
    }

    public function update(UpdateBahanRequest $request, Bahan $bahan)
    {
        $bahan->update($request->validated());
        return redirect()->route('bahans.index')->with('success', 'Bahan updated successfully.');
    }

    public function destroy(Bahan $bahan)
    {
        $bahan->delete();
        return redirect()->route('bahans.index')->with('success', 'Bahan deleted successfully.');
    }
}
