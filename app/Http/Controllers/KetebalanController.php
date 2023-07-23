<?php

namespace App\Http\Controllers;

use App\Models\Ketebalan;
use App\Http\Requests\StoreKetebalanRequest;
use App\Http\Requests\UpdateKetebalanRequest;

class KetebalanController extends Controller
{
    public function index()
    {
        $ketebalans = Ketebalan::all();
        return view('ketebalans.index', compact('ketebalans'));
    }

    public function create()
    {
        return view('ketebalans.create');
    }

    public function store(StoreKetebalanRequest $request)
    {
        Ketebalan::create($request->validated());
        return redirect()->route('ketebalans.index')->with('success', 'Ketebalan created successfully.');
    }

    public function show(Ketebalan $ketebalan)
    {
        return view('ketebalans.show', compact('ketebalan'));
    }

    public function edit(Ketebalan $ketebalan)
    {
        return view('ketebalans.edit', compact('ketebalan'));
    }

    public function update(UpdateKetebalanRequest $request, Ketebalan $ketebalan)
    {
        $ketebalan->update($request->validated());
        return redirect()->route('ketebalans.index')->with('success', 'Ketebalan updated successfully.');
    }

    public function destroy(Ketebalan $ketebalan)
    {
        $ketebalan->delete();
        return redirect()->route('ketebalans.index')->with('success', 'Ketebalan deleted successfully.');
    }
}
