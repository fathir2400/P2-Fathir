
<?php
use Illuminate\Support\Facades\DB;

$setting = DB::table('setting')->first();
?>

@extends('admin.index')

@section('content')
<div class="content-wrapper p-5 bg-white rounded shadow-md mt-10">
    <div class="text-center mb-6">
        <h2 class="font-semibold text-2xl text-gray-800">Invoice</h2>
    </div>

    <div class="flex justify-between items-center mb-6">
        <div>
        <img src="{{asset('storage/logo/'. $setting->logo) }}" width="50">
            <h4 class="text-lg font-semibold text-gray-700">{{ optional($setting)->nama_sekolah }}</h4>
            <p class="text-gray-500">Alamat: {{ optional($setting)->alamat }}</p>
            <p class="text-gray-500">Telepon: {{ optional($setting)->telepon }}</p>
            <p class="text-gray-500">Email: {{ optional($setting)->email }}</p>
        </div>
        <div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" onclick="window.print();">
                <i class="ri-printer-line mr-2"></i>Print
            </button>
        </div>
    </div>

    <div class="overflow-hidden border rounded-lg shadow-sm">
        <table class="min-w-full border-collapse border border-gray-200 bg-white">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th>No</th>
                    <th>Kode Pesanan</th>
                    <th>Pelanggan</th>
                    <th>Status</th>
                    <th>Meja</th>
                    <th>Pesanan</th>
                    <th>Total</th>



                                            </tr>
                                        </thead>
                                        @forelse ($order as $key => $order)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $order->kode_pesanan }}</td>
                                            <td>{{ $order->pelanggan->name ?? '-' }}</td>
                                            <td>{{ ucfirst($order->status) }}</td>
                                            <td>{{ $order->meja->nomor_meja ?? '-' }}</td>

                                            <td>
                                                <ul class="list-disc pl-5">
                                                    @forelse ($order->items as $item)
                                                        <li>
                                                            {{ $item->menu->nama_menu ?? 'Menu tidak ditemukan' }} —
                                                            {{ $item->jumlah }} × Rp{{ number_format($item->harga) }} =
                                                            Rp{{ number_format($item->jumlah * $item->harga) }}
                                                        </li>
                                                    @empty
                                                        <li>Tidak ada menu.</li>
                                                    @endforelse
                                                </ul>
                                            </td>
                                            <td>Rp{{ number_format($order->total) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="xl:col-span-12 col-span-12">
                                        <div>
                                            <label for="invoice-note" class="form-label">Note:</label>
                                            <textarea class="form-control w-full !rounded-md !bg-light" id="invoice-note" rows="2">Terimakasih</textarea>
                                        </div>
                                    </div>
</div>
@endsection

