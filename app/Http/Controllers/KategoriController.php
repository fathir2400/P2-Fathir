<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::paginate(10); // atau berapa pun item per halaman yang kamu mau
        return view('kategori.index', compact('kategori'));
    }

       public function create(){
        $kategori = Kategori::all();

        return view('kategori.create',[
            'kategori' => $kategori,

        ]);

    }
    public function store(Request $request)
{
    // Validasi data yang dikirimkan oleh form
    $request->validate([
        'nama' => 'required|string|max:255',
        'keterangan' => 'nullable|string|max:255',
    ]);

    // Hitung jumlah data di tabel kategori untuk menentukan nomor berikutnya
    $lastNumber = Kategori::count('id_kategori') + 1;

    // Format kode kategori (misalnya: KAT001, KAT002, dst.)
    $kodeKategori = 'KTG' . str_pad($lastNumber, 3, '0', STR_PAD_LEFT);

    // Simpan data ke tabel kategori
    Kategori::create([
        'kode_kategori' => $kodeKategori,
        'nama' => $request->nama,
        'keterangan' => $request->keterangan,
    ]);

    // Redirect ke halaman kategori dengan pesan sukses
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
}
public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.update', compact('kategori'));
    }

    // Menyimpan perubahan kategori (update)
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kode_kategori' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Ambil data kategori berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Update data kategori
        $kategori->update([
            'kode_kategori' => $request->kode_kategori,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        // Ambil data kategori berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Hapus kategori
        $kategori->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
    public function show(Request $request){
        $kategori = Kategori::get();
        return view('kategori.invoice',compact('kategori'));
       }
}
