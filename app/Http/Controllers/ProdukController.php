<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkList = Produk::all();
        return view('components.content.produk', compact('produkList'));
        // return view('components.content.produk');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Produk';
        return view('components.form.produk.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jenis_produk' => 'required|in:Makanan,Minuman',
            'harga' => 'required|numeric',
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'harga' => $request->harga,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        $title = 'Edit Produk';
        return view('components.form.produk.edit', compact('produk','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jenis_produk' => 'required|in:Makanan,Minuman',
            'harga' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'harga' => $request->harga,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
