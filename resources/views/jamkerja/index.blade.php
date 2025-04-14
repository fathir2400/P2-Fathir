@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <h3 class="text-2xl font-semibold text-gray-700">Manajemen Jam Kerja</h3>
    </div>

    <!-- Start:: Tabel Jam Kerja -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Jam Kerja</h3>
                    <a href="{{ route('jamkerja.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="text-start px-3 py-2">No</th>
                                <th class="text-start px-3 py-2">Bagian</th>
                                <th class="text-start px-3 py-2">Jam Mulai</th>
                                <th class="text-start px-3 py-2">Jam Selesai</th>
                                <th class="text-start px-3 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jamkerja as $key => $item)
                            <tr class="border-b">
                                <td class="px-3 py-2">{{ $key + 1 }}</td>
                                <td class="px-3 py-2">{{ ucfirst($item->bagian) }}</td>
                                <td class="px-3 py-2">{{ $item->jam_mulai }}</td>
                                <td class="px-3 py-2">{{ $item->jam_selesai }}</td>
                                <td class="px-3 py-2">
                                    <div class="flex gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                           data-id="{{ $item->id_jk }}"
                                           data-bagian="{{ $item->bagian }}"
                                           data-jammulai="{{ $item->jam_mulai }}"
                                           data-jamselesai="{{ $item->jam_selesai }}">
                                           <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('jamkerja.destroy', $item->id_jk) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full"
                                                onclick="return confirm('Yakin ingin menghapus {{ $item->bagian }}?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $jamkerja->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Jam Kerja</h3>
                </div>
                <div class="box-body p-4">
                    <form id="jamkerja-form" method="POST" action="{{ route('jamkerja.store') }}">
                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="jamkerja_id" name="id_jk">

                        <!-- Bagian Dropdown -->
                        <div class="form-group mb-3">
                            <label for="bagian" class="form-label font-medium">Bagian</label>
                            <select class="form-control" id="bagian" name="bagian" required>
                                <option value="" disabled selected>Pilih Bagian</option>
                                <option value="pagi">Pagi</option>
                                <option value="siang">Siang</option>
                                <option value="malam">Malam</option>
                            </select>
                        </div>

                        <!-- Jam Mulai -->
                        <div class="form-group mb-3">
                            <label for="jam_mulai" class="form-label font-medium">Jam Mulai</label>
                            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
                        </div>

                        <!-- Jam Selesai -->
                        <div class="form-group mb-3">
                            <label for="jam_selesai" class="form-label font-medium">Jam Selesai</label>
                            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
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

<!-- SCRIPT AJAX UNTUK EDIT DAN RESET -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('jamkerja-form');
    const formTitle = document.getElementById('form-title');
    const jamkerjaIdInput = document.getElementById('jamkerja_id');
    const bagianInput = document.getElementById('bagian');
    const jamMulaiInput = document.getElementById('jam_mulai');
    const jamSelesaiInput = document.getElementById('jam_selesai');
    const formMethod = document.getElementById('form-method');
    const resetBtn = document.getElementById('reset-btn');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const jamkerjaId = this.getAttribute('data-id');
            const bagian = this.getAttribute('data-bagian');
            const jamMulai = this.getAttribute('data-jammulai');
            const jamSelesai = this.getAttribute('data-jamselesai');

            // Mengisi form dengan data yang dipilih
            form.action = `/jamkerja/${jamkerjaId}`;
            formMethod.value = "PUT";
            jamkerjaIdInput.value = jamkerjaId;
            bagianInput.value = bagian;  // Pilih dropdown bagian
            jamMulaiInput.value = jamMulai;
            jamSelesaiInput.value = jamSelesai;
            formTitle.textContent = "Edit Jam Kerja";
        });
    });

    // **FUNGSI RESET KE MODE TAMBAH**
    function resetForm() {
        form.action = "{{ route('jamkerja.store') }}";
        formMethod.value = "POST";
        jamkerjaIdInput.value = "";
        bagianInput.value = ""; // Reset dropdown
        jamMulaiInput.value = "";
        jamSelesaiInput.value = "";
        formTitle.textContent = "Tambah Jam Kerja";
    }

    // **EVENT LISTENER UNTUK RESET FORM**
    resetBtn.addEventListener('click', resetForm);
});
</script>

@endsection
