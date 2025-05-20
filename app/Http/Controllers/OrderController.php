<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Ambil menu sesuai outlet user login
        $orders = Order::with('outlet', 'items.menu', 'meja') // tambahkan 'meja'
        ->where('outlet_id', $user->outlet_id)
        ->paginate(10);

        $pelanggans = User::where('role', 'pelanggan')->get();
        $menus = Menu::all();
        $mejas = Meja::where('outlet_id', auth()->user()->outlet_id)->get();

        $lastOrder = Order::latest()->first();
        $nextId = $lastOrder ? $lastOrder->id + 1 : 1;
        $autoKode = 'ORD-' . str_pad($nextId, 4, '0', STR_PAD_LEFT);

        return view('order.index', compact('orders', 'pelanggans', 'menus','mejas', 'autoKode'));
    }
    public function create()
    {
        // Ambil outlet_id berdasarkan pengguna yang sedang login
        $outletId = auth()->user()->outlet_id;  // Misalnya, outlet_id ada di tabel users

        // Ambil menu yang hanya terkait dengan outlet yang sesuai
        $menus = Menu::where('outlet_id', $outletId)->get();  // Filter menu berdasarkan outlet
        $mejas = Meja::where('outlet_id', auth()->user()->outlet_id)->get();

        // Ambil data pelanggan untuk form
        $pelanggans = User::where('role', 'pelanggan')->get();

        // Kirimkan data ke view
        return view('order.index', compact('menus','mejas', 'pelanggans'));
    }

    public function store(Request $request)
    {
        $isUpdate = $request->has('id') && $request->id;

        // Validasi Input
        $validator = Validator::make($request->all(), [
            'kode_pesanan' => 'required',
            'pelanggan_id' => 'required',
            'status' => 'required',
            'meja_id' => 'required|exists:mejas,id',
            'total' => 'required|numeric',
            'menu_id' => 'required|array',
            'jumlah' => 'required|array', // Ensure jumlah is required
            'jumlah.*' => 'required|numeric|min:1',
             // Ensure each item in jumlah is a number and >= 1
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            if ($isUpdate) {
                $order = Order::findOrFail($request->id);
                $order->update([
                    'pelanggan_id' => $request->pelanggan_id,
                    'status' => $request->status,
                    'total' => $request->total,
                    'kode_pesanan' => $request->kode_pesanan,
                    'user_id' => auth()->id(),
                    'outlet_id' => auth()->user()->outlet_id,
                    'meja_id' => $request->meja_id,
                ]);

                $order->items()->delete();
            } else {
                $order = Order::create([
                    'kode_pesanan' => $request->kode_pesanan,
                    'pelanggan_id' => $request->pelanggan_id,
                    'status' => $request->status,
                    'total' => $request->total,
                    'user_id' => auth()->id(),
                    'outlet_id' => auth()->user()->outlet_id,
                    'meja_id' => $request->meja_id,
                ]);
            }

            // Menambahkan item menu pesanan
            foreach ($request->menu_id as $i => $menuId) {
                $menu = Menu::findOrFail($menuId);

                // Validasi manual tambahan untuk quantity
                if (!isset($request->jumlah[$i]) || !is_numeric($request->jumlah[$i]) || $request->jumlah[$i] < 1) {
                    throw new \Exception("Quantity untuk menu ke-$i tidak valid.");
                }

                // Logging opsional untuk debug
                Log::info("Menyimpan OrderItem:", [
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'jumlah' => $request->jumlah[$i],
                    'harga' => $menu->harga
                ]);

                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'jumlah' => $request->jumlah[$i],
                    'harga' => $menu->harga,
                ]);
            }

            DB::commit();

            return redirect()->route('orders.index')->with('success', $isUpdate ? 'Pesanan berhasil diperbarui!' : 'Pesanan berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Order gagal: ', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString(),
                'input' => $request->all(),
            ]);

            return redirect()->back()->withErrors(['error' => 'Gagal menyimpan pesanan: ' . $e->getMessage()]);
        }
    }
    public function edit($id)
    {
        $order = Order::with('items.menu')->findOrFail($id);
        $pelanggans = User::where('role', 'pelanggan')->get();
        $menus = Menu::where('outlet_id', auth()->user()->outlet_id)->get();
        $mejas = Meja::where('outlet_id', auth()->user()->outlet_id)->get();


        return view('order.index', compact('order', 'pelanggans', 'menus', 'mejas'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_pesanan' => 'required',
            'pelanggan_id' => 'required',
            'status' => 'required',
            'meja_id' => 'required|exists:mejas,id',
            'total' => 'required|numeric',
            'menu_id' => 'required|array',
            'jumlah' => 'required|array',
            'jumlah.*' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $order = Order::findOrFail($id);
            $order->update([
                'kode_pesanan' => $request->kode_pesanan,
                'pelanggan_id' => $request->pelanggan_id,
                'status' => $request->status,
                'total' => $request->total,
                'user_id' => auth()->id(),
                'outlet_id' => auth()->user()->outlet_id,
                'meja_id' => $request->meja_id,
            ]);

            // Hapus order item lama
            $order->items()->delete();

            // Tambah order item baru
            foreach ($request->menu_id as $i => $menuId) {
                $menu = Menu::findOrFail($menuId);

                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'jumlah' => $request->jumlah[$i],
                    'harga' => $menu->harga,
                ]);
            }

            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Pesanan berhasil diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Update order gagal: ' . $e->getMessage());

            return redirect()->back()->withErrors(['error' => 'Gagal update pesanan: ' . $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil dihapus!');
    }

    public function detail($id)
{
    // Ambil data order beserta relasi yang diperlukan (pelanggan, items, menu, meja, dsb.)
    $order = Order::with(['pelanggan', 'meja', 'items.menu'])->findOrFail($id);

    // Return ke view detail, misal resources/views/orders/show.blade.php
    return view('order.detail', compact('order'));
}
public function updatePayment(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $request->validate([
        'metode_pembayaran' => 'required|in:cash,qris,debit',
    ]);
    $order->metode_pembayaran = $request->metode_pembayaran;
    $order->status = 'paid';
    $order->save();

    // Redirect ke halaman order.index, bukan ke detail lagi
    return redirect()->route('orders.index')
        ->with('success', 'Metode pembayaran dan status berhasil diperbarui.');
}
public function cancel($id)
{
    $order = Order::findOrFail($id);
    $order->status = 'canceled';
    $order->save();

    return redirect()->route('orders.index')
        ->with('success', 'Pesanan berhasil dibatalkan.');
}
public function print($id) {
    $order = Order::with(['user', 'pelanggan', 'items.menu'])->findOrFail($id);
    return view('order.print', compact('order'));
}

public function show(Request $request){
    $order = order::get();
    return view('order.invoice',compact('order'));
   }
}
