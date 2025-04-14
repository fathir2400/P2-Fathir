@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Satuan</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Satuan
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Start:: Tabel Satuan -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between items-center p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Satuan</h3>
                    <a href="{{ route('satuan.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
    Invoice
    <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
</a>

                </div>
                <div class="table-responsive p-4">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="text-start px-3 py-2">No</th>
                                <th class="text-start px-3 py-2">Kode Satuan</th>
                                <th class="text-start px-3 py-2">Nama Satuan</th>
                                <th class="text-start px-3 py-2">Keterangan</th>
                                <th class="text-start px-3 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($satuan as $key => $item)
                            <tr class="border-b">
                                <td class="px-3 py-2">{{ $key + 1 }}</td>
                                <td class="px-3 py-2">{{ $item->kode_satuan }}</td>
                                <td class="px-3 py-2">{{ $item->nama }}</td>
                                <td class="px-3 py-2">{{ $item->keterangan }}</td>
                                <td class="px-3 py-2">
                                    <div class="flex gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn" 
                                            data-id="{{ $item->id_satuan }}" 
                                            data-kode="{{ $item->kode_satuan }}" 
                                            data-nama="{{ $item->nama }}" 
                                            data-keterangan="{{ $item->keterangan }}">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('satuan.destroy', $item->id_satuan) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->nama }}?')">
                                                <i class="bi bi-trash"></i> 
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $satuan->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Satuan</h3>
                </div>
                <div class="box-body p-4">
                    <form id="satuan-form" method="POST" action="{{ route('satuan.store') }}">
                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="satuan_id" name="id_satuan">

                        <div class="form-group mb-3">
                            <label for="kode_satuan" class="form-label font-medium">Kode Satuan</label>
                            <input type="text" class="form-control bg-gray-100" id="kode_satuan" name="kode_satuan"
                                value="{{ 'STN' . str_pad(App\Models\Satuan::count() + 1, 3, '0', STR_PAD_LEFT) }}" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama" class="form-label font-medium">Nama Satuan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="keterangan" class="form-label font-medium">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
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
    const form = document.getElementById('satuan-form');
    const formTitle = document.getElementById('form-title');
    const satuanIdInput = document.getElementById('satuan_id');
    const kodeSatuanInput = document.getElementById('kode_satuan');
    const namaSatuanInput = document.getElementById('nama');
    const keteranganInput = document.getElementById('keterangan');
    const formMethod = document.getElementById('form-method');
    const resetBtn = document.getElementById('reset-btn');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const satuanId = this.getAttribute('data-id');
            const kodeSatuan = this.getAttribute('data-kode');
            const namaSatuan = this.getAttribute('data-nama');
            const keterangan = this.getAttribute('data-keterangan');

            // Mengisi form dengan data yang dipilih
            form.action = `/satuan/${satuanId}`;
            formMethod.value = "PUT";
            satuanIdInput.value = satuanId;
            kodeSatuanInput.value = kodeSatuan;
            namaSatuanInput.value = namaSatuan;
            keteranganInput.value = keterangan;
            formTitle.textContent = "Edit Satuan";
        });
    });

    // **FUNGSI RESET KE MODE TAMBAH**
    function resetForm() {
        form.action = "{{ route('satuan.store') }}";
        formMethod.value = "POST";
        satuanIdInput.value = "";
        kodeSatuanInput.value = "{{ 'STN' . str_pad(App\Models\Satuan::count() + 1, 3, '0', STR_PAD_LEFT) }}";
        namaSatuanInput.value = "";
        keteranganInput.value = "";
        formTitle.textContent = "Tambah Satuan";
    }

    // **EVENT LISTENER UNTUK RESET FORM**
    resetBtn.addEventListener('click', resetForm);
});
</script>

@endsection
