<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'nama_kontak_1' => 'string',
            'nomor_kontak_1' => 'string',
            'nama_kontak_2' => 'string',
            'nomor_kontak_2' => 'string',
            'nama_kontak_3' => 'string',
            'nomor_kontak_3' => 'string',
            'gedung_image' => 'image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $fileName = null;
        if ($image = $request->file('gedung_image')) {
            $extension = $request->file('gedung_image')->getClientOriginalExtension();
            $fileName = $request->nama . '_gedung' . '.' . $extension;
            $destinationPath = 'storage/cabang/';
            $image->move($destinationPath, $fileName);
        }

        Cabang::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nama_kontak_1' => $request->nama_kontak_1,
            'nomor_kontak_1' => $request->nomor_kontak_1,
            'nama_kontak_2' => $request->nama_kontak_2,
            'nomor_kontak_2' => $request->nomor_kontak_2,
            'nama_kontak_3' => $request->nama_kontak_3,
            'nomor_kontak_3' => $request->nomor_kontak_3,
            'gedung_image' => $fileName, 
        ]);

        return redirect()->route('cabang.index')->with('success', 'Cabang created successfully.');
    }

    public function show(Cabang $cabang)
    {
        return view('cabangs.show', compact('cabang'));
    }

    public function edit(Cabang $cabang)
    {
        return view('cabangs.edit', compact('cabang'));
    }

    public function update(Request $request, Cabang $cabang)
    {
        $request->validate([
            'nama' => 'sometimes|required|string',
            'alamat' => 'sometimes|required|string',
            'nama_kontak_1' => 'sometimes|string',
            'nomor_kontak_1' => 'sometimes|string',
            'nama_kontak_2' => 'sometimes|string',
            'nomor_kontak_2' => 'sometimes|string',
            'nama_kontak_3' => 'sometimes|string',
            'nomor_kontak_3' => 'sometimes|string',
            'gedung_image' => 'sometimes|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $fileName = $cabang->gedung_image;
        if ($image = $request->file('gedung_image')) {
            $extension = $request->file('gedung_image')->getClientOriginalExtension();
            $fileName = $request->nama . '_gedung' . '.' . $extension;
            $destinationPath = 'storage/cabang/gedung/';
            $image->move($destinationPath, $fileName);
        }

        $cabang->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nama_kontak_1' => $request->nama_kontak_1,
            'nomor_kontak_1' => $request->nomor_kontak_1,
            'nama_kontak_2' => $request->nama_kontak_2,
            'nomor_kontak_2' => $request->nomor_kontak_2,
            'nama_kontak_3' => $request->nama_kontak_3,
            'nomor_kontak_3' => $request->nomor_kontak_3,
            'gedung_image' => $fileName, 
        ]);

        return redirect()->route('cabang.index')->with('success', 'Cabang updated successfully.');
    }

    public function destroy(Cabang $cabang)
    {
        $cabang->delete();
        return redirect()->route('cabang.index')->with('success', 'Cabang deleted successfully.');
    }
}
