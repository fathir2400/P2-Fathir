<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Promo;
use App\Models\Outlet;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $query = Promo::with(['outlet', 'menu', 'kategori']);

        if ($user->role !== 'admin_pusat') {
            $query->where('outlet_id', $user->outlet_id);
        }

        $promos = $query->paginate(10);
        $outlets = Outlet::all();
        $menus = Menu::all(); // ✅ Tambah ini
        $kategoris = Kategori::all(); // ✅ Dan ini

        return view('promo.index', compact('promos', 'outlets', 'menus', 'kategoris'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul_promo' => 'required|string|max:255',
            'kode_promo' => 'required|string|max:50',
            'tipe_promo' => 'required|in:persentase,nominal,beli1gratis1',
            'nilai_promo' => 'required|numeric|min:0',
            'menu_id' => 'nullable|exists:menus,id',
            'kategori_id' => 'nullable|exists:kategoris,id_kategori',
            'outlet_id' => 'required|exists:outlets,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'status' => 'required|boolean',
        ]);

        Promo::create($request->all());

        return redirect()->back()->with('success', 'Promo berhasil ditambahkan.');
    }



    public function update(Request $request, $id)
{
    $request->validate([
        'judul_promo' => 'required|string|max:255',
        'kode_promo' => 'required|string|max:50',
        'tipe_promo' => 'required|in:persentase,nominal,beli1gratis1',
        'nilai_promo' => 'required|numeric|min:0',
        'menu_id' => 'nullable|exists:menus,id',
        'kategori_id' => 'nullable|exists:kategoris,id_kategori',
        'outlet_id' => 'required|exists:outlets,id',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date',
        'status' => 'required|boolean',
    ]);

    $promo = Promo::findOrFail($id);
    $promo->update($request->all());

    return redirect()->back()->with('success', 'Promo berhasil diperbarui.');
}


    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->back()->with('success', 'Promo berhasil dihapus.');
    }
}
