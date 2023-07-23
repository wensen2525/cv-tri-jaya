<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Http\Requests\StoreCabangRequest;
use App\Http\Requests\UpdateCabangRequest;

class CabangController extends Controller
{
    public function index()
    {
        $cabangs = Cabang::all();
        return view('cabangs.index', compact('cabangs'));
    }

    public function create()
    {
        return view('cabangs.create');
    }

    public function store(StoreCabangRequest $request)
    {
        Cabang::create($request->validated());
        return redirect()->route('cabangs.index')->with('success', 'Cabang created successfully.');
    }

    public function show(Cabang $cabang)
    {
        return view('cabangs.show', compact('cabang'));
    }

    public function edit(Cabang $cabang)
    {
        return view('cabangs.edit', compact('cabang'));
    }

    public function update(UpdateCabangRequest $request, Cabang $cabang)
    {
        $cabang->update($request->validated());
        return redirect()->route('cabangs.index')->with('success', 'Cabang updated successfully.');
    }

    public function destroy(Cabang $cabang)
    {
        $cabang->delete();
        return redirect()->route('cabangs.index')->with('success', 'Cabang deleted successfully.');
    }
}
