<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use App\Http\Requests\StoreMerekRequest;
use App\Http\Requests\UpdateMerekRequest;

class MerekController extends Controller
{
    public function index()
    {
        $mereks = Merek::all();
        return view('merek.index', compact('mereks'));
    }

    public function create()
    {
        return view('merek.create');
    }

    public function store(StoreMerekRequest $request)
    {
        Merek::create($request->validated());
        return redirect()->route('mereks.index')->with('success', 'Merek created successfully.');
    }

    public function show(Merek $merek)
    {
        return view('mereks.show', compact('merek'));
    }

    public function edit(Merek $merek)
    {
        return view('mereks.edit', compact('merek'));
    }

    public function update(UpdateMerekRequest $request, Merek $merek)
    {
        $merek->update($request->validated());
        return redirect()->route('mereks.index')->with('success', 'Merek updated successfully.');
    }

    public function destroy(Merek $merek)
    {
        $merek->delete();
        return redirect()->route('mereks.index')->with('success', 'Merek deleted successfully.');
    }
}
