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
        $promos = Promo::with('menu')->paginate(10);
        $menus = Menu::all();
        return view('promo.index', compact('promos', 'menus'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_promo' => 'required|string|max:255',
            'diskon' => 'required|numeric|min:1|max:100',
            'menu_id' => 'nullable|exists:menus,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        Promo::create([
            'nama_promo' => $request->nama_promo,
            'diskon' => $request->diskon,
            'menu_id' => $request->menu_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
        ]);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $request->validate([
            'nama_promo' => 'required|string|max:255',
            'diskon' => 'required|numeric|min:1|max:100',
            'menu_id' => 'nullable|exists:menus,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $promo->update([
            'nama_promo' => $request->nama_promo,
            'diskon' => $request->diskon,
            'menu_id' => $request->menu_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
        ]);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui');
    }


    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->back()->with('success', 'Promo berhasil dihapus.');
    }
    public function show(Request $request){
        $promo = promo::get();
        return view('promo.invoice',compact('promo'));
       }
}
