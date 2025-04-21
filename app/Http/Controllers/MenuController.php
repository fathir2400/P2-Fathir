<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Ambil menu sesuai outlet user login
        $menus = Menu::with('kategori', 'outlet')
                    ->where('outlet_id', $user->outlet_id)
                    ->paginate(10);

        $kategoris = Kategori::all();

        // Ambil hanya outlet milik user, untuk konsistensi jika ditampilkan
        $outlets = Outlet::where('id', $user->outlet_id)->get();

        return view('menu.index', compact('menus', 'kategoris', 'outlets'));
    }


    public function store(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategoris,id_kategori',
            'deskripsi' => 'nullable|string',
            'outlet_id' => 'required|exists:outlets,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/menus', $namaFile, 'public');
            $validated['gambar'] = $path;
        }

        // Set outlet_id berdasarkan user login
        $validated['outlet_id'] = $user->outlet_id;

        Menu::create($validated);

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();

        // Ambil menu hanya jika milik outlet user
        $menu = Menu::where('id', $id)
                    ->where('outlet_id', $user->outlet_id)
                    ->firstOrFail();

        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategoris,id_kategori',
            'deskripsi' => 'nullable|string',
            'outlet_id' => 'required|exists:outlets,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($menu->gambar && Storage::disk('public')->exists($menu->gambar)) {
                Storage::disk('public')->delete($menu->gambar);
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/menus', $namaFile, 'public');
            $validated['gambar'] = $path;
        }

        $menu->update($validated);

        return redirect()->back()->with('success', 'Menu berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Outlet berhasil dihapus.');
    }
}
