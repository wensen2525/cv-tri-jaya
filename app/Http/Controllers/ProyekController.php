<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProyekRequest;
use App\Http\Requests\UpdateProyekRequest;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyeks = Proyek::all();
        return view('proyeks.index', compact('proyeks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyeks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required|string',
            'maps_image' => 'image|max:1999|mimes:jpg,png,jpeg',
            'maps_link' => 'string',
            'nama_kontak_1' => 'string',
            'nomor_kontak_1' => 'string',
            'nama_kontak_2' => 'string',
            'nomor_kontak_2' => 'string',
            'bidang' => 'string',
            'description' => 'string',
            'first_year' => 'integer',
            'gedung_image' => 'image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $fileNameMaps = null;
        if ($image = $request->file('maps_image')) {
            $extension = $request->file('maps_image')->getClientOriginalExtension();
            $fileNameMaps = $request->nama . '_maps' .  '.' . $extension;
            $destinationPath = 'storage/proyek/maps/';
            $image->move($destinationPath, $fileNameMaps);
        }

        $fileNameGedung = null;
        if ($image = $request->file('gedung_image')) {
            $extension = $request->file('gedung_image')->getClientOriginalExtension();
            $fileNameGedung = $request->nama . '_gedung' . '.' . $extension;
            $destinationPath = 'storage/proyek/gedung/';
            $image->move($destinationPath, $fileNameGedung);
        }

        Proyek::create([
            'nama' => $request->nama,
            'maps_image' => $fileNameMaps,
            'maps_link' => $request->maps_link,
            'nama_kontak_1' => $request->nama_kontak_1,
            'nomor_kontak_1' => $request->nomor_kontak_1,
            'nama_kontak_2' => $request->nama_kontak_2,
            'nomor_kontak_2' => $request->nomor_kontak_2,
            'bidang' => $request->bidang,
            'description' => $request->description,
            'first_year' => $request->first_year,
            'gedung_image' => $fileNameGedung,
        ]);

        History::create([
            'nama' => $request->nama,
            'type' => 'Proyek',
            'status' => 'Created'
        ]);

        return redirect()->route('proyek.index')->with('success', 'Proyek created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyek $proyek)
    {
        return view('proyeks.show', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyek $proyek)
    {
        return view('proyeks.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyek $proyek)
    {   
        $request->validate([
            'nama' => 'sometimes|required|string',
            'maps_image' => 'sometimes|image|max:1999|mimes:jpg,png,jpeg',
            'maps_link' => 'sometimes|string',
            'nama_kontak_1' => 'sometimes|string',
            'nomor_kontak_1' => 'sometimes|string',
            'nama_kontak_2' => 'sometimes|string',
            'nomor_kontak_2' => 'sometimes|string',
            'bidang' => 'sometimes|string',
            'description' => 'sometimes|string',
            'first_year' => 'sometimes|integer',
            'gedung_image' => 'sometimes|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $fileNameMaps = $proyek->maps_image;
        if ($image = $request->file('maps_image')) {
            $extension = $request->file('maps_image')->getClientOriginalExtension();
            $fileNameMaps = $request->nama . '_maps' .  '.' . $extension;
            $destinationPath = 'storage/proyek/maps/';
            $image->move($destinationPath, $fileNameMaps);
        }

        $fileNameGedung = $proyek->gedung_image;
        if ($image = $request->file('gedung_image')) {
            $extension = $request->file('gedung_image')->getClientOriginalExtension();
            $fileNameGedung = $request->nama . '_gedung' . '.' . $extension;
            $destinationPath = 'storage/proyek/gedung/';
            $image->move($destinationPath, $fileNameGedung);
        }

        $proyek->update([
            'nama' => $request->nama,
            'maps_image' => $fileNameMaps,
            'maps_link' => $request->maps_link,
            'nama_kontak_1' => $request->nama_kontak_1,
            'nomor_kontak_1' => $request->nomor_kontak_1,
            'nama_kontak_2' => $request->nama_kontak_2,
            'nomor_kontak_2' => $request->nomor_kontak_2,
            'bidang' => $request->bidang,
            'description' => $request->description,
            'first_year' => $request->first_year,
            'gedung_image' => $fileNameGedung,
        ]);

        History::create([
            'nama' => $request->nama,
            'type' => 'Proyek',
            'status' => 'Updated'
        ]);

        return redirect()->route('proyek.index')->with('success', 'Proyek updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();
        return redirect()->route('proyek.index')->with('success', 'Proyek deleted successfully');
    }
}
