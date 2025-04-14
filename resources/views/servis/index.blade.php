@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <h3 class="text-2xl font-semibold text-gray-700">Manajemen Service</h3>
    </div>

    <!-- Start:: Tabel Service -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between items-center p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Service</h3>
                </div>
                <div class="table-responsive p-4">
                    <!-- Menampilkan data service -->
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Servis</th>
            <th>Plat Nomor</th>
            <th>Nama Motor</th>
            <th>Merk</th>
            <th>Petugas</th>
            <th>Pelanggan</th>
            <th>Sparepart</th>
            <th>Alat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($servis as $key => $item)
        <tr>
            <td>{{ $servis->firstItem() + $key }}</td>
            <td>{{ $item->kode_servis }}</td>
            <td>{{ $item->plat_nomor }}</td>
            <td>{{ $item->nama_motor }}</td>
            <td>{{ optional($item->kode_merk)->nama_merk ?? '-' }}</td>
            <td>{{ optional($item->petugas)->name ?? '-' }}</td>
<td>{{ optional($item->pengguna)->name ?? '-' }}</td>

            
<td>
    @foreach ($item->ServisSparepart as $sp)
        <span class="badge badge-success">{{ optional($sp->sparepart)->nama_sparepart ?? '-' }}</span>
    @endforeach
</td>

                                <td>
                                    @foreach ($item->ServisAlat as $al)
                                        <span class="badge badge-primary">{{ $al->alat->nama_alat }}</span>
                                    @endforeach
                                </td>

            <td>
            <div class="flex gap-2">
            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn" 
   data-id="{{ $item->kode_servis }}" 
   data-kode="{{ $item->kode_servis }}" 
   data-plat="{{ $item->plat_nomor }}" 
   data-nama="{{ $item->nama_motor }}" 
   data-merk="{{ $item->kode_merk }}" 
   data-deskripsi="{{ $item->deskripsi_masalah }}" 
   data-pengguna="{{ $item->user_id }}" 
   data-petugas="{{ $item->petugas_id }}"
   data-sparepart="{{ json_encode($item->servisSparepart->pluck('kode_sparepart')) }}"
   data-alat="{{ json_encode($item->servisAlat->pluck('kode_alat')) }}">
   <i class="ri-edit-line"></i>
</a>
                                        <form action="{{ route('servis.destroy', $item->kode_servis) }}" method="POST">
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
        @empty
        <tr>
            <td colspan="7" class="text-center">Data service belum tersedia.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-4">
    {{ $servis->links() }}
</div>

                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit Service -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Service</h3>
                </div>
                <div class="box-body p-4">
                    <form id="servis-form" method="POST" action="{{ route('servis.store') }}">
                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="servis_id" name="id">

                        <!-- Kode Service -->
                        <div class="form-group mb-3">
                            <label for="kode_servis" class="form-label font-medium">Kode Service</label>
                            <input type="text" class="form-control bg-gray-100" id="kode_servis" name="kode_servis"
                            value="{{ autonumber('servis', 'kode_servis', 3, 'SVC') }}" readonly>

                        <!-- Plat Nomor -->
                        <div class="form-group mb-3">
                            <label for="plat_nomor" class="form-label font-medium">Plat Nomor</label>
                            <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" placeholder="Contoh: D 1234 AB" required>
                        </div>

                        <!-- Nama Motor -->
                        <div class="form-group mb-3">
                            <label for="nama_motor" class="form-label font-medium">Nama Motor</label>
                            <input type="text" class="form-control" id="nama_motor" name="nama_motor" placeholder="Contoh: Honda Beat" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kode_merk" class="form-label font-medium">Merk</label>
                            <select class="form-control" id="kode_merk" name="kode_merk" required>
                                <option value="" disabled selected>Pilih Merk</option>
                                @foreach($merk as $item)
                                    <option value="{{ $item->nama_merk }}">{{ $item->nama_merk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Petugas -->
                        <div class="form-group mb-3">
                            <label for="petugas_id" class="form-label font-medium">Petugas</label>
                            <select class="form-control" id="petugas_id" name="petugas_id" required>
                                <option value="" disabled selected>Pilih Petugas</option>
                                @foreach($petugas as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Pelanggan -->
                        <div class="form-group mb-3">
                            <label for="user_id" class="form-label font-medium">Pelanggan</label>
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="" disabled selected>Pilih Pelanggan</option>
                                @foreach($pengguna as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Deskripsi Masalah -->
                        <div class="form-group mb-3">
                            <label for="deskripsi_masalah" class="form-label font-medium">Deskripsi Masalah</label>
                            <textarea class="form-control" id="deskripsi_masalah" name="deskripsi_masalah" rows="3" placeholder="Jelaskan masalah pada motor..." required></textarea>
                        </div>

                        <!-- Sparepart (Checkbox) -->
                        <div class="form-group mb-3">
                            <label class="form-label font-medium">Sparepart</label>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($sparepart as $sparepart)
                                    <div>
                                        <input type="checkbox" id="sparepart_{{ $sparepart->kode_sparepart }}" name="sparepart[]" value="{{ $sparepart->kode_sparepart }}">
                                        <label for="sparepart_{{ $sparepart->kode_sparepart }}">{{ $sparepart->nama_sparepart }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Alat (Checkbox) -->
                        <div class="form-group mb-3">
                            <label class="form-label font-medium">Alat</label>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($alat as $alat)
                                    <div>
                                        <input type="checkbox" id="alat_{{ $alat->kode_alat }}" name="alat[]" value="{{ $alat->kode_alat }}">
                                        <label for="alat_{{ $alat->kode_alat }}">{{ $alat->nama_alat }}</label>
                                    </div>
                                @endforeach
                            </div>
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

<!-- SCRIPT UNTUK EDIT DAN RESET FORM -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('servis-form');
    const formTitle = document.getElementById('form-title');
    const servisIdInput = document.getElementById('servis_id');
    const kodeServisInput = document.getElementById('kode_servis');
    const platNomorInput = document.getElementById('plat_nomor');
    const namaMotorInput = document.getElementById('nama_motor');
    const kodeMerkInput = document.getElementById('kode_merk');
    const petugasInput = document.getElementById('petugas_id');
    const penggunaInput = document.getElementById('user_id');
    const deskripsiInput = document.getElementById('deskripsi_masalah');
    const formMethod = document.getElementById('form-method');
    const resetBtn = document.getElementById('reset-btn');

    // **FUNGSI EDIT DATA**
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const servisId = this.getAttribute('data-id');
            const kodeServis = this.getAttribute('data-kode');
            const platNomor = this.getAttribute('data-plat');
            const namaMotor = this.getAttribute('data-nama');
            const kodeMerk = this.getAttribute('data-merk');
            const petugasId = this.getAttribute('data-petugas');
            const penggunaId = this.getAttribute('data-pengguna');
            const deskripsiMasalah = this.getAttribute('data-deskripsi');
            const sparepart = JSON.parse(this.getAttribute('data-sparepart'));
            const alat = JSON.parse(this.getAttribute('data-alat'));

            // Mengisi form dengan data yang dipilih
            form.action = `/servis/${servisId}`;
            formMethod.value = "PUT";
            servisIdInput.value = servisId;
            kodeServisInput.value = kodeServis;
            platNomorInput.value = platNomor;
            namaMotorInput.value = namaMotor;
            kodeMerk.value = kodeMerk;
            petugasInput.value = petugasId;
            penggunaInput.value = penggunaId;
            deskripsiInput.value = deskripsiMasalah;

            // Reset checkbox terlebih dahulu
            document.querySelectorAll('input[name="sparepart[]"]').forEach(cb => cb.checked = false);
            document.querySelectorAll('input[name="alat[]"]').forEach(cb => cb.checked = false);

            // Centang spareparts dan alats yang terkait
            spareparts.forEach(id => document.getElementById(`sparepart_${id}`).checked = true);
            alats.forEach(id => document.getElementById(`alat_${id}`).checked = true);

            formTitle.textContent = "Edit Service";
        });
    });

    // **FUNGSI RESET KE MODE TAMBAH**
    function resetForm() {
        form.action = "{{ route('servis.store') }}";
        formMethod.value = "POST";
        servisIdInput.value = "";
        kodeServisInput.value = "{{ 'SVC' . str_pad(App\Models\Servis::count() + 1, 3, '0', STR_PAD_LEFT) }}";
        platNomorInput.value = "";
        namaMotorInput.value = "";
        kodeMerkInput.value = "";
        petugasInput.value = "";
        pelangganInput.value = "";
        deskripsiInput.value = "";

        // Uncheck all checkboxes
        document.querySelectorAll('input[name="sparepart[]"]').forEach(cb => cb.checked = false);
        document.querySelectorAll('input[name="alat[]"]').forEach(cb => cb.checked = false);

        formTitle.textContent = "Tambah Service";
    }

    // **EVENT LISTENER UNTUK RESET FORM**
    resetBtn.addEventListener('click', resetForm);
});
</script>

@endsection
