<?php

namespace App\Http\Controllers;

use App\Models\Pembelajaran;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelajarans = Pembelajaran::all();

        return view('pages.pembelajaran', compact('pembelajarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pembelajaran-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tujuan_pembelajaran' => 'nullable|string',
            'materi_tambahan' => 'nullable|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Pembelajaran::create($request->all());

        return redirect()->route('pembelajaran.index')->with('success', 'Modul Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelajaran $pembelajaran)
    {
        //
    }
}
