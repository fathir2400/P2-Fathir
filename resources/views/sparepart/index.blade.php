@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <h3 class="text-2xl font-semibold text-gray-700">Manajemen Sparepart</h3>
    </div>

    <!-- Start:: Tabel Sparepart -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Sparepart</h3>
                    <a href="{{ route('sparepart.invoice') }}" class="ti-btn ti-btn-secondary-full">
                        Invoice <i class="fe fe-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Kode Sparepart</th>
                                
                                <th>Nama Sparepart</th>
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sparepart as $key => $item)
                            <tr class="border-b">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->kode_sparepart }}</td>
                              
                                <td>{{ $item->nama_sparepart }}</td>
                                <td>{{ $item->kategori->nama ?? '-' }}</td>
                                <td>{{ $item->satuan->nama ?? '-' }}</td>
                                <td>{{ $item->jumlah_stok }}</td>
                                <td>Rp {{ number_format($item->harga, 2, ',', '.') }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <div class="flex gap-2">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn" 
                                            data-id="{{ $item->id}}"
                                            data-kode="{{ $item->kode_sparepart }}"
                                            data-nama="{{ $item->nama_sparepart }}"
                                            data-kategori="{{ $item->kode_kategori }}"
                                            data-satuan="{{ $item->kode_satuan }}"
                                            data-stok="{{ $item->jumlah_stok }}"
                                            data-harga="{{ $item->harga }}"
                                            data-keterangan="{{ $item->keterangan }}">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('sparepart.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->nama_sparepart }}?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $sparepart->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit Sparepart -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Sparepart</h3>
                </div>
                <div class="box-body p-4">
                    <form id="sparepart-form" action="{{ route('sparepart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="sparepart_id" name="id_sparepart">

                        <!-- Kode Sparepart -->
                        <div class="form-group">
                            <label for="kode_sparepart" class="form-label">Kode Sparepart</label>
                            <input type="text" class="form-control" id="kode_sparepart" name="kode_sparepart" value="{{ 'SPT' . str_pad(App\Models\Sparepart::count() + 1, 3, '0', STR_PAD_LEFT) }}" readonly>
                        </div>

                        <!-- Nama Sparepart -->
                        <div class="form-group">
                            <label for="nama_sparepart" class="form-label">Nama Sparepart</label>
                            <input type="text" class="form-control" id="nama_sparepart" name="nama_sparepart">
                        </div>

                        <!-- Kategori -->
                        <div class="form-group">
                            <label for="kode_kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kode_kategori" name="kode_kategori">
                                <option value="" selected>Pilih Kategori</option>
                                @foreach($kategori as $kategori)
                                    <option value="{{ $kategori->kode_kategori }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Satuan -->
                        <div class="form-group">
                            <label for="kode_satuan" class="form-label">Satuan</label>
                            <select class="form-control" id="kode_satuan" name="kode_satuan">
                                <option value="" selected>Pilih Satuan</option>
                                @foreach($satuan as $satuan)
                                    <option value="{{ $satuan->kode_satuan }}">{{ $satuan->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Jumlah Stok -->
                        <div class="form-group">
                            <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok">
                        </div>

                        <!-- Harga -->
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>

                        <!-- Keterangan -->
                        <div class="form-group">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="form-control"></textarea>
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
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('sparepart-form');
    const formTitle = document.getElementById('form-title');
    const sparepartIdInput = document.getElementById('sparepart_id');
    const kodeInput = document.getElementById('kode_sparepart');
    const namaInput = document.getElementById('nama_sparepart');
    const kategoriInput = document.getElementById('kode_kategori');
    const satuanInput = document.getElementById('kode_satuan');
    const stokInput = document.getElementById('jumlah_stok');
    const hargaInput = document.getElementById('harga');
    const keteranganInput = document.getElementById('keterangan');
    const formMethod = document.createElement('input'); // Buat input hidden untuk method
    formMethod.type = "hidden";
    formMethod.name = "_method";
    form.appendChild(formMethod);
    const resetBtn = document.getElementById('reset-btn');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const sparepartId = this.getAttribute('data-id');
            const kode = this.getAttribute('data-kode');
            const nama = this.getAttribute('data-nama');
            const kategori = this.getAttribute('data-kategori');
            const satuan = this.getAttribute('data-satuan');
            const stok = this.getAttribute('data-stok');
            const harga = this.getAttribute('data-harga');
            const keterangan = this.getAttribute('data-keterangan');

            // Debugging di console
            console.log("Edit clicked for ID:", sparepartId);
            console.log("Kategori:", kategori);
            console.log("Satuan:", satuan);

            // Set action form ke update
            form.action = `/sparepart/${sparepartId}`;
            formMethod.value = "PUT";

            // Isi form dengan data
            sparepartIdInput.value = sparepartId;
            kodeInput.value = kode;
            namaInput.value = nama;
            stokInput.value = stok;
            hargaInput.value = harga;
            keteranganInput.value = keterangan;

            // Set dropdown kategori & satuan (cek apakah ada option yang cocok)
            if (kategoriInput.querySelector(`option[value="${kategori}"]`)) {
                kategoriInput.value = kategori;
            } else {
                kategoriInput.value = "";
            }

            if (satuanInput.querySelector(`option[value="${satuan}"]`)) {
                satuanInput.value = satuan;
            } else {
                satuanInput.value = "";
            }

            formTitle.textContent = "Edit Sparepart";
        });
    });

    // **FUNGSI RESET FORM**
    resetBtn.addEventListener('click', function() {
        form.action = "{{ route('sparepart.store') }}"; // Kembali ke mode tambah
        formMethod.value = "POST";
        sparepartIdInput.value = "";
        kodeInput.value = "";
        namaInput.value = "";
        kategoriInput.value = "";
        satuanInput.value = "";
        stokInput.value = "";
        hargaInput.value = "";
        keteranganInput.value = "";

        formTitle.textContent = "Tambah Sparepart";
    });
});



@endsection
