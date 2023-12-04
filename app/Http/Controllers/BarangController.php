<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        
        $barangs = Barang::all();
        return view('barangs.index',['barangs'=> $barangs,'flag'=> 1 ]);
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0',
        ]);

        // Buat barang baru
        Barang::create($request->all());

        // Redirect ke halaman index
        return redirect()->route('barangs.index');
    }

    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0',
        ]);

        // Update barang
        $barang->update($request->all());

        // Redirect ke halaman index
        return redirect()->route('barangs.index');
    }

    public function destroy($id)
{
    $barang = Barang::findOrFail($id);
    $barang->delete();

    return redirect()->route('barangs.index');
}
    
}