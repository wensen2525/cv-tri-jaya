<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKacaRequest;
use App\Http\Requests\UpdateKacaRequest;

class KacaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $kacas = Kaca::with(['jenis'])->get();
        return view('kacas.index', compact('kacas'));
    }

    public function create()
    {
        // ambil data dari database lewat models
        $jenises = Jenis::all();

        // return
        return view('kacas.create',[
            'jenises' => $jenises,
        ]);
    }

    public function store(StoreKacaRequest $request)
    {
        if($request->validated()){

            $fileName = null;
            if ($image = $request->file('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = $request->nama . '.' . $extension;
                $destinationPath = 'storage/kaca/';
                $image->move($destinationPath, $fileName);
            }
            
            Kaca::create([
                'jenis_id' => $request->jenis_id,
                'nama' => $request->nama,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'ketebalan' => $request->ketebalan,
                'image' => $fileName
            ]);

            return redirect()->route('kaca.index')->with('success', 'Kaca created successfully');
        }else{
            return redirect()->route('kaca.index')->with('not success', 'Kaca is not created successfully because have some problems');
        }
        
        
    }

    public function show(Kaca $kaca)
    {
        return view('kaca.show', compact('kaca'));
    }

    public function edit(Kaca $kaca)
    {
        // dd($kaca);
        $jenises = Jenis::all();

        // return
        return view('kacas.edit',[
            'jenises' => $jenises,
            'kaca' => $kaca
        ]);
    }

    public function update(Request $request, Kaca $kaca)
    {
        // dd($request,$kaca);
        $request->validate([
            'nama' => ['sometimes','required', 'string', 'max:255'],
            'jenis_id' => ['sometimes','required'],
            'ketebalan' => ['sometimes','string', 'max:255'],
            'harga' => ['sometimes','required', 'numeric', 'min:0'],
            'stok' => ['sometimes','required', 'numeric', 'min:0'],
            'image' => ['sometimes','image','max:1999', 'mimes:jpg,png,jpeg'],
        ]);

        $fileName = $kaca->image;
        if ($image = $request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $request->nama . '.' . $extension;
            $destinationPath = 'storage/kaca/';
            $image->move($destinationPath, $fileName);
        }

        $kaca->update([
            'jenis_id' => $request->jenis_id,
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'ketebalan' => $request->ketebalan,
            'image' => $fileName
        ]);

        return redirect()->route('kaca.index')->with('success', 'Kaca updated successfully');
    }

    public function destroy(Kaca $kaca)
    {
        $kaca->delete();
        return redirect()->route('kaca.index')->with('success', 'Kaca deleted successfully');
    }
}
