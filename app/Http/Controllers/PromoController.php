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

        // Ambil data outlet sesuai role
        $outlets = $user->role === 'admin_pusat'
            ? Outlet::all()
            : Outlet::where('id', $user->outlet_id)->get();

        // Ambil semua meja untuk user admin outlet atau admin pusat
        $promos = Promo::with('outlet')
            ->when($user->role !== 'admin_pusat', function ($query) use ($user) {
                $query->where('outlet_id', $user->outlet_id);
            })
            ->latest()
            ->paginate(10);
$menus =Menu::all();
        return view('promo.index', compact('promos', 'outlets','menus'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'diskon' => 'required|numeric|min:1|max:100',
            'menu_id' => 'nullable|exists:menus,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'outlet_id' => 'required|exists:outlets,id',
        ]);


        if ($request->filled('id')) {
            // Update
            $promos = Promo::findOrFail($request->id);
            $promos->update($validated);
            return redirect()->back()->with('success', 'Promo berhasil diperbarui.');
        } else {
            // Tambah baru
            Promo::create($validated);
            $diskon = $validated['diskon'];
            $menuId = $validated['menu_id'];

            if ($menuId) {
                // Promo untuk satu menu
                $menu = Menu::find($menuId);
                $harga_asli = $menu->harga;
                $menu->harga = $harga_asli - ($harga_asli * $diskon / 100);
                $menu->save();
            } else {
                // Promo untuk semua menu
                $menus = Menu::all();
                foreach ($menus as $menu) {
                    $harga_asli = $menu->harga;
                    $menu->harga = $harga_asli - ($harga_asli * $diskon / 100);
                    $menu->save();
                }
            }

            return redirect()->back()->with('success', 'Promo berhasil disimpan.');
        }
    }

    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'diskon' => 'required|numeric|min:1|max:100',
            'menu_id' => 'nullable|exists:menus,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $promo->update($validated);

        // Terapkan diskon setelah update
        $diskon = $validated['diskon'];
        $menuId = $validated['menu_id'];

        if ($menuId) {
            // Promo untuk satu menu
            $menu = Menu::find($menuId);
            if ($menu) {
                $harga_asli = $menu->harga;
                $menu->harga = $harga_asli - ($harga_asli * $diskon / 100);
                $menu->save();
            }
        } else {
            // Promo untuk semua menu
            $menus = Menu::all();
            foreach ($menus as $menu) {
                $harga_asli = $menu->harga;
                $menu->harga = $harga_asli - ($harga_asli * $diskon / 100);
                $menu->save();
            }
        }

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui');
    }



    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);

        $diskon = $promo->diskon;
        $menuId = $promo->menu_id;

        if ($menuId) {
            // Satu menu
            $menu = Menu::find($menuId);
            if ($menu) {
                // Kembalikan ke harga sebelum diskon
                $menu->harga = $menu->harga / (1 - ($diskon / 100));
                $menu->save();
            }
        } else {
            // Semua menu
            $menus = Menu::all();
            foreach ($menus as $menu) {
                // Kembalikan ke harga sebelum diskon
                $menu->harga = $menu->harga / (1 - ($diskon / 100));
                $menu->save();
            }
        }

        $promo->delete();

        return redirect()->back()->with('success', 'Promo berhasil dihapus dan harga menu dikembalikan.');
    }

    public function show(Request $request){
        $promo = promo::get();
        return view('promo.invoice',compact('promo'));
       }
}
