<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    // Menampilkan daftar outlet
    public function index()
    {
        $outlets = Outlet::paginate(10); // menampilkan 10 data per halaman
        return view('outlet.index', compact('outlets'));
    }

    // Menyimpan data outlet baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_outlet' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string|max:10',
        ]);

        Outlet::create($request->all());

        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil ditambahkan.');
    }

    // Menampilkan data outlet untuk diedit
    public function edit($id)
    {
        $outlet = Outlet::findOrFail($id);
        return response()->json($outlet);
    }

    // Mengupdate data outlet
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_outlet' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string|max:10',
        ]);

        $outlet = Outlet::findOrFail($id);
        $outlet->update($request->all());

        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil diperbarui.');
    }

    // Menghapus data outlet
    public function destroy($id)
    {
        $outlet = Outlet::findOrFail($id);
        $outlet->delete();

        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil dihapus.');
    }
    public function show(Request $request){
        $outlet = Outlet::get();
        return view('outlet.invoice',compact('outlet'));
       }
}
