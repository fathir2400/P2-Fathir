@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <h3 class="text-2xl font-semibold text-gray-700">Manajemen Type</h3>
    </div>

    <!-- Start:: Tabel Type -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Type</h3>
                    <a href="{{ route('type.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="text-start px-3 py-2">No</th>
                                <th class="text-start px-3 py-2">Jenis</th>
                                <th class="text-start px-3 py-2">Merk</th>
                                <th class="text-start px-3 py-2">Nama Type</th>
                                <th class="text-start px-3 py-2">Tahun</th>
                                <th class="text-start px-3 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($type as $key => $item)
                            <tr class="border-b">
                                <td class="px-3 py-2">{{ $key + 1 }}</td>
                                <td class="px-3 py-2">{{ $item->jenis->nama_jenis ?? '-' }}</td>
                                <td class="px-3 py-2">{{ $item->merk->nama_merk ?? '-' }}</td>
                                <td class="px-3 py-2">{{ $item->nama_type }}</td>
                                <td class="px-3 py-2">{{ $item->tahun }}</td>
                                <td class="px-3 py-2">
                                    <div class="flex gap-2">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
   data-id="{{ $item->id_type }}"
   data-jenis="{{ $item->kode_jenis }}"
   data-merk="{{ $item->kode_merk }}"
   data-nama="{{ $item->nama_type }}"
   data-tahun="{{ $item->tahun }}">
   <i class="ri-edit-line"></i>
</a>
                                        <form action="{{ route('type.destroy', $item->id_type) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->nama_type }}?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $type->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Type</h3>
                </div>
                <div class="box-body p-4">
                <form id="type-form" method="POST" action="{{ route('type.store') }}">
    @csrf
    <input type="hidden" id="form-method" name="_method" value="POST">
    <input type="hidden" id="type_id" name="id_type">

    <!-- Jenis Dropdown -->
    <div class="form-group mb-3">
        <label for="kode_jenis" class="form-label font-medium">Jenis</label>
        <select class="form-control" id="kode_jenis" name="kode_jenis" required>
            <option value="" disabled selected>Pilih Jenis</option>
            @foreach($jenis as $j)
                <option value="{{ $j->kode_jenis }}">{{ $j->nama_jenis }}</option>
            @endforeach
        </select>
    </div>

    <!-- Merk Dropdown -->
    <div class="form-group mb-3">
        <label for="kode_merk" class="form-label font-medium">Merk</label>
        <select class="form-control" id="kode_merk" name="kode_merk" required>
            <option value="" disabled selected>Pilih Merk</option>
            @foreach($merk as $m)
                <option value="{{ $m->kode_merk }}">{{ $m->nama_merk }}</option>
            @endforeach
        </select>
    </div>

    <!-- Nama Type -->
    <div class="form-group mb-3">
        <label for="nama_type" class="form-label font-medium">Nama Type</label>
        <input type="text" class="form-control" id="nama_type" name="nama_type" required>
    </div>

    <!-- Tahun -->
    <div class="form-group mb-3">
        <label for="tahun" class="form-label font-medium">Tahun</label>
        <input type="number" class="form-control" id="tahun" name="tahun" required>
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
    const form = document.getElementById('type-form');
    const typeIdInput = document.getElementById('type_id');
    const jenisInput = document.getElementById('kode_jenis');
    const merkInput = document.getElementById('kode_merk');
    const namaTypeInput = document.getElementById('nama_type');
    const tahunInput = document.getElementById('tahun');
    const formMethod = document.getElementById('form-method');
    const resetBtn = document.getElementById('reset-btn');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const typeId = this.getAttribute('data-id');
            const kodeJenis = this.getAttribute('data-jenis');
            const kodeMerk = this.getAttribute('data-merk');
            const nama = this.getAttribute('data-nama');
            const tahun = this.getAttribute('data-tahun');

            // Ubah action form ke URL update
            form.action = `/type/${typeId}`;

            // Ganti metode menjadi PUT untuk update
            formMethod.value = "PUT";

            // Isi data ke form
            typeIdInput.value = typeId;
            jenisInput.value = kodeJenis;
            merkInput.value = kodeMerk;
            namaTypeInput.value = nama;
            tahunInput.value = tahun;
        });
    });

    // **FUNGSI RESET FORM**
    resetBtn.addEventListener('click', function() {
        form.action = "{{ route('type.store') }}"; // Kembali ke mode tambah
        formMethod.value = "POST";
        typeIdInput.value = "";
        jenisInput.value = "";
        merkInput.value = "";
        namaTypeInput.value = "";
        tahunInput.value = "";
    });
});
</script>



@endsection
