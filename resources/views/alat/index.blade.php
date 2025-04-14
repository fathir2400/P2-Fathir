@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <h3 class="text-2xl font-semibold text-gray-700">Manajemen Alat</h3>
    </div>

    <!-- Start:: Tabel Alat -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Alat</h3>
                    <a href="{{ route('alat.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="text-start px-3 py-2">No</th>
                                <th class="text-start px-3 py-2">Kode Alat</th>
                                <th class="text-start px-3 py-2">Gambar</th>
                                <th class="text-start px-3 py-2">Nama Alat</th>
                                <th class="text-start px-3 py-2">Stok</th>
                                <th class="text-start px-3 py-2">Keterangan</th>
                                <th class="text-start px-3 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alat as $key => $item)
                            <tr class="border-b">
                                <td class="px-3 py-2">{{ $key + 1 }}</td>
                                <td class="px-3 py-2">{{ $item->kode_alat }}</td>
                                <td class="px-3 py-2">{{ $item->nama_alat }}</td>
                                <td>{{ $item->kategori->nama ?? '-' }}</td>
                                <td>{{ $item->satuan->nama ?? '-' }}</td>
                                <td class="px-3 py-2">{{ $item->stok }}</td>
                                <td class="px-3 py-2">{{ $item->keterangan }}</td>
                                <td class="px-3 py-2">
                                    <div class="flex gap-2">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
   data-id="{{ $item->id_alat }}"
   data-kode="{{ $item->kode_alat }}"
   data-nama="{{ $item->nama_alat }}"
   data-kategori="{{ $item->kode_kategori }}"
                                            data-satuan="{{ $item->kode_satuan }}"
   data-stok="{{ $item->stok }}"
   data-keterangan="{{ $item->keterangan }}"
   data-gambar="{{ $item->gambar }}"> <!-- Pastikan ada atribut ini -->
   <i class="ri-edit-line"></i>
</a>
                                        <form action="{{ route('alat.destroy', $item->id_alat) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->nama_alat }}?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $alat->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Alat</h3>
                </div>
                <div class="box-body p-4">
                <form id="alat-form" action="{{ route('alat.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="alat_id" name="id_alat">
                        <input type="hidden" name="gambar_lama" value="{{ $alat->gambar ?? '' }}">

                        <!-- Input for Kode Alat -->
                        <div class="xl:col-span-12 col-span-12 mt-0">
                            <label for="kode_alat" class="form-label">Kode Alat</label>
                            <input type="text" class="form-control" id="kode_alat" name="kode_alat" value="{{ 'ALT' . str_pad(App\Models\Data_alat::count() + 1, 3, '0', STR_PAD_LEFT) }}" readonly>
                        </div>

                        <!-- Input for Nama Alat -->
                        <div class="xl:col-span-12 col-span-12 mt-0">
                            <label for="nama_alat" class="form-label">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat" name="nama_alat" required placeholder="Masukkan Nama Alat">
                        </div>
                         <!-- Kategori -->
                         <div class="form-group">
                            <label for="kode_kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kode_kategori" name="kode_kategori">
                                <option value="" selected>Pilih Kategori</option>
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Satuan -->
                        <div class="form-group">
                            <label for="kode_satuan" class="form-label">Satuan</label>
                            <select class="form-control" id="kode_satuan" name="kode_satuan">
                                <option value="" selected>Pilih Satuan</option>
                                @foreach($satuans as $satuan)
                                    <option value="{{ $satuan->id_satuan }}">{{ $satuan->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Input for Stok -->
                        <div class="xl:col-span-12 col-span-12 mt-0">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required placeholder="Masukkan Jumlah Stok">
                        </div>

                        <!-- Input for Keterangan -->
                        <div class="xl:col-span-12 col-span-12 mt-0">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" required placeholder="Masukkan Keterangan Alat"></textarea>
                        </div>

                    


                        <!-- Buttons -->
                        <div class="flex gap-2 mt-4">
                            <button type="submit" class="ti-btn ti-btn-primary-full px-4 py-2">Simpan</button>
                            <button type="button" id="reset-btn" class="ti-btn ti-btn-secondary-full px-4 py-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End:: Form -->
    </div>
</div>

<!-- SCRIPT UNTUK EDIT DAN RESET -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('alat-form');
    const formTitle = document.getElementById('form-title');
    const alatIdInput = document.getElementById('alat_id');
    const kodeInput = document.getElementById('kode_alat');
    const namaInput = document.getElementById('nama_alat');
    const kategoriInput = document.getElementById('kode_kategori');
    const satuanInput = document.getElementById('kode_satuan');
    const stokInput = document.getElementById('stok');
    const keteranganInput = document.getElementById('keterangan');
    const formMethod = document.getElementById('form-method');
    const resetBtn = document.getElementById('reset-btn');
    const imagePreview = document.getElementById('image-preview');
    const gambarLamaInput = document.querySelector('input[name="gambar_lama"]');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const alatId = this.getAttribute('data-id');
            const kode = this.getAttribute('data-kode');
            const nama = this.getAttribute('data-nama');
            const kategori = this.getAttribute('data-kategori');
            const satuan = this.getAttribute('data-satuan');
            const stok = this.getAttribute('data-stok');
            const keterangan = this.getAttribute('data-keterangan');
            const gambar = this.getAttribute('data-gambar');

            // Ubah action form ke URL update
            form.action = `/alat/${alatId}`;
            formMethod.value = "PUT";

            // Isi data ke form
            alatIdInput.value = alatId;
            kodeInput.value = kode;
            namaInput.value = nama;
            kategoriInput.value = kategori;
            satuanInput.value = satuan;
            stokInput.value = stok;
            keteranganInput.value = keterangan;

            // Set dropdown kategori dan satuan ke nilai yang dipilih
            document.querySelector(`#kode_kategori option[value="${kategori}"]`).selected = true;
            document.querySelector(`#kode_satuan option[value="${satuan}"]`).selected = true;


            formTitle.textContent = "Edit Alat";
        });
    });

    // **FUNGSI RESET FORM** (Kembali ke Mode Tambah)
    resetBtn.addEventListener('click', function() {
        form.action = "{{ route('alat.store') }}"; // Kembali ke mode tambah
        formMethod.value = "POST";
        alatIdInput.value = "";
        kodeInput.value = "";
        namaInput.value = "";
        kategoriInput.value = "";
        satuanInput.value = "";
        stokInput.value = "";
        keteranganInput.value = "";

        // Reset dropdown kategori & satuan ke default
        document.querySelector(`#kode_kategori option[value=""]`).selected = true;
        document.querySelector(`#kode_satuan option[value=""]`).selected = true;

       

        formTitle.textContent = "Tambah Alat";
    });
});
</script>


@endsection
