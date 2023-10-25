<?php

namespace App\Http\Controllers;

use App\Models\Kaca;
use App\Models\Jenis;
use App\Models\Ukuran;
use App\Models\History;
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
        dd($request);
        if($request->validated()){

            $fileName = null;
            if ($image = $request->file('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = $request->nama . '.' . $extension;
                $destinationPath = 'storage/kaca/';
                $image->move($destinationPath, $fileName);
            }
            
            $kaca_ID = Kaca::create([
                'jenis_id' => $request->jenis_id,
                'nama' => $request->nama,
                'stok' => true,
                'harga' => $request->harga,
                'ketebalan' => $request->ketebalan,
                'image' => $fileName
            ])->get('id');

            History::create([
                'nama' => $request->nama,
                'type' => 'Kaca',
                'status' => 'Created'
            ]);

            Ukuran::create([
                'kaca_id' => $request->kaca_ID,
                'panjang' => $request->panjang,
                'lebar' => $request->lebar,
            ]);

            $kaca = Kaca::find($request->kaca_ID);

            History::create([
                'nama' => $request->nama,
                'type' => 'Ukuran',
                'status' => 'Created'
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
            'stok' => ['sometimes','required'],
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

        History::create([
            'nama' => $request->nama,
            'type' => 'Kaca',
            'status' => 'Updated'
        ]);

        $kaca = Kaca::find($kaca->id);
        History::create([
            'nama' => $request->nama,
            'type' => 'Ukuran',
            'status' => 'Updated'
        ]);
        return redirect()->route('kaca.index')->with('success', 'Kaca updated successfully');
    }

    public function destroy(Kaca $kaca)
    {
        $kaca->delete();
        return redirect()->route('kaca.index')->with('success', 'Kaca deleted successfully');
    }
}
