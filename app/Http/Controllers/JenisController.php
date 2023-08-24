<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->except('index');
    }

    public function index()
    {
        $jenises = Jenis::all();
        return view('jenises.index', compact('jenises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
        ]);

        Jenis::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis.index')->with('success', 'Jenis created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jeni)
    {
        return view('jenises.show',[
            'jenis' => $jeni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jeni)
    {
        return view('jenises.edit',[
            'jenis' => $jeni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jeni)
    {
        $request->validate([
            'nama' => ['sometimes', 'required', 'string', 'max:255'],
        ]);

        $jeni->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis.index')->with('success', 'Jenis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jeni)
    {
        $jeni->delete();
        return redirect()->route('jenis.index')->with('success', 'Jenis deleted successfully');
    }
}
