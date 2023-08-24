<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Models\Ukuran;
use App\Http\Requests\StoreUkuranRequest;
use App\Http\Requests\UpdateUkuranRequest;

class UkuranController extends Controller
{
    public function index()
    {
        $ukurans = Ukuran::all();
        return view('ukurans.index', compact('ukurans'));
    }

    public function create()
    {
        return view('ukurans.create',[
            'kacas' => Kaca::all(),
        ]);
    }
    
    public function store(StoreUkuranRequest $request)
    {
        Ukuran::create($request->validated());
        return redirect()->route('ukurans.index')->with('success', 'Ukuran created successfully.');
    }

    public function show(Ukuran $ukuran)
    {
        return view('ukurans.show', compact('ukuran'));
    }

    public function edit(Ukuran $ukuran)
    {
        return view('ukurans.edit', compact('ukuran'));
    }

    public function update(UpdateUkuranRequest $request, Ukuran $ukuran)
    {
        $ukuran->update($request->validated());
        return redirect()->route('ukurans.index')->with('success', 'Ukuran updated successfully.');
    }

    public function destroy(Ukuran $ukuran)
    {
        $ukuran->delete();
        return redirect()->route('ukurans.index')->with('success', 'Ukuran deleted successfully.');
    }
}
