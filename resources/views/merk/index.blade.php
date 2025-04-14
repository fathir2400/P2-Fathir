@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Merk</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Merk
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Start:: Tabel Merk -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between items-center p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Merk</h3>
                    <a href="{{ route('merk.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-4">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="text-center px-3 py-2">No</th>
                                <th class="text-center px-3 py-2">Kode Merk</th>
                                <th class="text-center px-3 py-2">Nama Merk</th>
                                <th class="text-center px-3 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($merk as $key => $item)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="text-center px-3 py-2">{{ $key + 1 }}</td>
                                <td class="text-center px-3 py-2">{{ $item->kode_merk }}</td>
                                <td class="text-center px-3 py-2">{{ $item->nama_merk }}</td>
                                <td class="text-center px-3 py-2">
                                    <div class="flex justify-center gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn" 
                                           data-id="{{ $item->id_merk }}" 
                                           data-kode="{{ $item->kode_merk }}" 
                                           data-nama="{{ $item->nama_merk }}">
                                           <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('merk.destroy', $item->id_merk) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->nama_merk }}?')">
                                                <i class="bi bi-trash"></i> 
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">Data merk belum tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $merk->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Merk</h3>
                </div>
                <div class="box-body p-4">
                    <form id="merk-form" method="POST" action="{{ route('merk.store') }}">
                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="merk_id" name="id_merk">

                        <div class="form-group mb-3">
                            <label for="kode_merk" class="form-label font-medium">Kode Merk</label>
                            <input type="text" class="form-control bg-gray-100" id="kode_merk" name="kode_merk"
                                value="{{ 'MRK' . str_pad(App\Models\Merk::count() + 1, 3, '0', STR_PAD_LEFT) }}" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_merk" class="form-label font-medium">Nama Merk</label>
                            <input type="text" class="form-control" id="nama_merk" name="nama_merk" required>
                        </div>

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

<!-- SCRIPT AJAX UNTUK EDIT DAN RESET -->
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
