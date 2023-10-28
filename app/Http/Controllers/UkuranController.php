<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Models\Ukuran;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUkuranRequest;
use App\Http\Requests\UpdateUkuranRequest;

class UkuranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        // $ukurans = Ukuran::all();
        $ukurans = Ukuran::with('kaca')->get();
        // dd($ukurans);
        return view('ukurans.index',[
            'ukurans' => $ukurans
        ]);
    }

    public function create()
    {
        return view('ukurans.create',[
            'kacas' => Kaca::all(),
        ]);
    }
    
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'kaca_id' => 'required|integer',
            'panjang' => 'required|integer',
            'lebar' => 'required|integer',
        ]);

        Ukuran::create([
            'kaca_id' => $request->kaca_id,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar
        ]);

        $kaca = Kaca::find($request->kaca_id);
        
        History::create([
            'nama' => $kaca->nama,
            'type' => 'Ukuran',
            'status' => 'Created'
        ]);

        return redirect()->route('ukuran.index')->with('success', 'Ukuran created successfully.');
    }

    public function show(Ukuran $ukuran)
    {
        return view('ukurans.show', compact('ukuran'));
    }

    public function edit(Ukuran $ukuran)
    {
        return view('ukurans.edit', [
            'ukuran' => $ukuran,
            'kacas' => Kaca::all(),
        ]);
    }

    public function update(Request $request, Ukuran $ukuran)
    {
        $request->validate([
            'kaca_id' => 'sometimes|required',
            'panjang' => 'sometimes|required|integer',
            'lebar' => 'sometimes|required|integer',
        ]);

        $ukuran->update([
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
        ]);

        $kaca = Kaca::find($request->kaca_id);

        History::create([
            'nama' => $kaca->nama,
            'type' => 'Ukuran',
            'status' => 'Updated'
        ]);
        
        return redirect()->route('ukuran.index')->with('success', 'Ukuran updated successfully.');
    }

    public function destroy(Ukuran $ukuran)
    {
        $ukuran->delete();
        return redirect()->route('ukuran.index')->with('success', 'Ukuran deleted successfully.');
    }
}
