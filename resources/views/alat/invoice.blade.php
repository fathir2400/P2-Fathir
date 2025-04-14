
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
                <th class="text-start px-3 py-2">No</th>
                                <th class="text-start px-3 py-2">Kode Alat</th>
                                <th class="text-start px-3 py-2">Gambar</th>
                                <th class="text-start px-3 py-2">Nama Alat</th>
                                <th class="text-start px-3 py-2">Stok</th>
                                <th class="text-start px-3 py-2">Keterangan</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alat as $key => $item)
                            <tr class="border-b">
                                <td class="px-3 py-2">{{ $key + 1 }}</td>
                                <td class="px-3 py-2">{{ $item->kode_alat }}</td>
                                <td class="px-3 py-2">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" width="50" height="50" alt="Gambar Alat">
                                </td>
                                <td class="px-3 py-2">{{ $item->nama_alat }}</td>
                                <td class="px-3 py-2">{{ $item->stok }}</td>
                                <td class="px-3 py-2">{{ $item->keterangan }}</td>
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

