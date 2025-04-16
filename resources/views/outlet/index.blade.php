@extends('admin.index')

@section('content')

<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
    <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Outlet</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Outlet
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
</div>


    <!-- Start:: Tabel Outlet -->
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Outlet</h3>
                    <a href="{{ route('kategori.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table ">
                        {{-- Di bagian tabel --}}
<thead class="bg-gray-200 text-gray-700">
    <tr>
        <th>No</th>
        <th>Nama Outlet</th>
        <th>Alamat</th>
        <th>Kecamatan</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Kode Pos</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($outlets as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->nama_outlet }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->kecamatan }}</td>
        <td>{{ $item->kota }}</td>
        <td>{{ $item->provinsi }}</td>
        <td>{{ $item->kode_pos }}</td>
        <td>
            <div class="flex gap-2">
                <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                    data-id="{{ $item->id }}"
                    data-nama_outlet="{{ $item->nama_outlet }}"
                    data-alamat="{{ $item->alamat }}"
                    data-kecamatan="{{ $item->kecamatan }}"
                    data-kota="{{ $item->kota }}"
                    data-provinsi="{{ $item->provinsi }}"
                    data-kode_pos="{{ $item->kode_pos }}">
                    <i class="ri-edit-line"></i>
                </a>
                <form action="{{ route('outlet.destroy', $item->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus outlet ini?')" class="ti-btn ti-btn-sm ti-btn-danger-full">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>

                    </table>
                    {{ $outlets->links() }}
                </div>
            </div>
        </div>

        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah kategori</h3>
                </div>
                <div class="box-body p-4">
                    <form id="outlet-form" method="POST" action="{{ route('outlet.store') }}">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="form-group mb-3">
                            <label for="nama_outlet">Nama Outlet</label>
                            <input type="text" name="nama_outlet" id="nama_outlet" class="form-control" required placeholder="Masukkan nama outlet">
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" required placeholder="Masukkan alamat lengkap">
                        </div>

                        <div class="form-group mb-3">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" required placeholder="Masukkan kecamatan">
                        </div>

                        <div class="form-group mb-3">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" id="kota" class="form-control" required placeholder="Masukkan kota">
                        </div>

                        <div class="form-group mb-3">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" name="provinsi" id="provinsi" class="form-control" required placeholder="Masukkan provinsi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" name="kode_pos" id="kode_pos" class="form-control" required placeholder="Masukkan kode pos">
                        </div>

                        <button type="submit" class="ti-btn ti-btn-primary-full px-4 py-2">Simpan</button>
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
        const form = document.getElementById('outlet-form');
        const formTitle = document.getElementById('form-title');
        const formMethod = document.getElementById('form-method'); // opsional kalau pakai PUT
        const idInput = document.getElementById('id');

        const namaInput = document.getElementById('nama_outlet');
        const alamatInput = document.getElementById('alamat');
        const kecamatanInput = document.getElementById('kecamatan');
        const kotaInput = document.getElementById('kota');
        const provinsiInput = document.getElementById('provinsi');
        const kodePosInput = document.getElementById('kode_pos');

        const resetBtn = document.getElementById('reset-btn');

        // Fungsi: Ubah form ke mode Edit
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama_outlet');
                const alamat = this.getAttribute('data-alamat');
                const kecamatan = this.getAttribute('data-kecamatan');
                const kota = this.getAttribute('data-kota');
                const provinsi = this.getAttribute('data-provinsi');
                const kode_pos = this.getAttribute('data-kode_pos');

                form.action = `/outlet/${id}`;
                if (!form.querySelector('input[name="_method"]')) {
                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PUT';
                    form.appendChild(methodInput);
                } else {
                    form.querySelector('input[name="_method"]').value = 'PUT';
                }

                idInput.value = id;
                namaInput.value = nama;
                alamatInput.value = alamat;
                kecamatanInput.value = kecamatan;
                kotaInput.value = kota;
                provinsiInput.value = provinsi;
                kodePosInput.value = kode_pos;

                formTitle.textContent = "Edit Outlet";
            });
        });

        // Fungsi: Reset form ke mode Tambah
        function resetForm() {
            form.action = `{{ route('outlet.store') }}`;
            if (form.querySelector('input[name="_method"]')) {
                form.querySelector('input[name="_method"]').value = 'POST';
            }

            idInput.value = "";
            namaInput.value = "";
            alamatInput.value = "";
            kecamatanInput.value = "";
            kotaInput.value = "";
            provinsiInput.value = "";
            kodePosInput.value = "";

            formTitle.textContent = "Tambah Outlet";
        }

        // Event Listener untuk tombol Reset
        if (resetBtn) {
            resetBtn.addEventListener('click', resetForm);
        }
    });
    </script>



@endsection
