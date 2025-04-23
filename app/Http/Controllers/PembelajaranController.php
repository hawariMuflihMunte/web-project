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
        // dd($request->all(), $request->only('created_by'));

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tujuan_pembelajaran' => 'nullable|string',
            'materi_tambahan' => 'nullable|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'created_by' => 'required|string',
        ]);

        // Pembelajaran::create([
        //     'judul' => $request->only('judul'),
        //     'deskripsi' => $request->only('deskripsi'),
        //     'tujuan_pembelajaran' => $request->only('tujuan_pembelajaran'),
        //     'materi_tambahan' => $request->only('materi_tambahan'),
        //     'lampiran' => $request->file('lampiran') ? $request->file('lampiran')->store('lampiran') : null,
        //     'gambar' => $request->file('gambar') ? $request->file('gambar')->store('gambar') : null,
        //     'created_by' => $request->only('created_by'),
        // ]);

        $pembelajaran = new Pembelajaran();
        $pembelajaran->judul = $request->judul;
        $pembelajaran->deskripsi = $request->deskripsi;
        $pembelajaran->tujuan_pembelajaran = $request->tujuan_pembelajaran;
        $pembelajaran->materi_tambahan = $request->materi_tambahan;
        $pembelajaran->lampiran = $request->file('lampiran') ? $request->file('lampiran')->store('lampiran') : null;
        $pembelajaran->gambar = $request->file('gambar') ? $request->file('gambar')->store('gambar') : null;
        $pembelajaran->created_by = $request->created_by;
        $pembelajaran->save();

        // Handle file uploads
        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('lampiran');
            $pembelajaran->lampiran = $lampiranPath;
        }

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar');
            $pembelajaran->gambar = $gambarPath;
        }

        $pembelajaran->save();

        return redirect()->route('pembelajaran.index')->with('success', 'Modul Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelajaran = Pembelajaran::where('slug', $id)->firstOrFail();

        return view('pages.pembelajaran-detail', compact('pembelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
