<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;

class JenisController extends Controller
{
    public function index()
    {
        $jenises = Jenis::all();
        return view('jenises.index', compact('jenises'));
    }

    public function create()
    {
        return view('jenises.create');
    }

    public function store(StoreJenisRequest $request)
    {
        Jenis::create($request->validated());
        return redirect()->route('jenises.index')->with('success', 'Jenis created successfully.');
    }

    public function show(Jenis $jenis)
    {
        return view('jenises.show', compact('jenis'));
    }

    public function edit(Jenis $jenis)
    {
        return view('jenises.edit', compact('jenis'));
    }

    public function update(UpdateJenisRequest $request, Jenis $jenis)
    {
        $jenis->update($request->validated());
        return redirect()->route('jenises.index')->with('success', 'Jenis updated successfully.');
    }

    public function destroy(Jenis $jenis)
    {
        $jenis->delete();
        return redirect()->route('jenises.index')->with('success', 'Jenis deleted successfully.');
    }
}
