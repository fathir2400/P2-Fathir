<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Outlet;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Ambil data outlet sesuai role
        $outlets = $user->role === 'admin_pusat'
            ? Outlet::all()
            : Outlet::where('id', $user->outlet_id)->get();

        // Ambil semua meja untuk user admin outlet atau admin pusat
        $mejas = Meja::with('outlet')
            ->when($user->role !== 'admin_pusat', function ($query) use ($user) {
                $query->where('outlet_id', $user->outlet_id);
            })
            ->latest()
            ->paginate(10);

        return view('meja.index', compact('mejas', 'outlets'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_meja' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer',
            'status' => 'required|in:kosong,terisi,dipesan,dibooking',
            'outlet_id' => 'required|exists:outlets,id',
        ]);

        if ($request->filled('id')) {
            // Update
            $meja = Meja::findOrFail($request->id);
            $meja->update($validated);
            return redirect()->back()->with('success', 'Meja berhasil diperbarui.');
        } else {
            // Tambah baru
            Meja::create($validated);
            return redirect()->back()->with('success', 'Meja berhasil ditambahkan.');
        }
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nomor_meja' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer',
            'status' => 'required|in:kosong,terisi,dipesan,dibooking',
            'outlet_id' => 'required|exists:outlets,id',
        ]);

        $meja = Meja::findOrFail($id);
        $meja->update($validated);

        return redirect()->route('meja.index')->with('success', 'Meja berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $meja = Meja::findOrFail($id);
        $meja->delete();

        return redirect()->back()->with('success', 'Meja berhasil dihapus.');
    }
    public function show(Request $request){
        $meja = meja::get();
        return view('meja.invoice',compact('meja'));
       }
}
