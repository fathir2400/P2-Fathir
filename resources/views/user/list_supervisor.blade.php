@extends('admin.index')

@section('content')
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">User</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            User
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Start:: Tabel & Form -->
    <div class="grid grid-cols-12 gap-6">
        <!-- Start:: Table -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar User</h3>
                    <a href="{{ route('supervisor.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Jenkel</th>
                                <th>Outlet</th>
                                <th>Foto</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supervisors as $key => $item)
                            <tr class="border-b">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->jenkel }}</td>
                                <td>{{ $item->outlet->nama_outlet ?? '-' }}</td>
                                <td><img src="{{ asset('storage/foto-profile/'.$item->foto_profile) }}" width="50" height="50" alt="Foto"></td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    @if (in_array(auth()->user()->role, ['admin', 'supervisor']))
                                    <div class="flex gap-2">
                                        <!-- Tombol edit -->
                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                            data-id="{{ $item->id }}"
                                            data-nama="{{ $item->name }}"
                                            data-email="{{ $item->email }}"
                                            data-telepon="{{ $item->telepon }}"
                                            data-jenkel="{{ $item->jenkel }}"
                                            data-role="{{ $item->role }}"
                                            data-outlet="{{ $item->outlet_id }}">
                                            <i class="ri-edit-line"></i>
                                        </button>

                                        <!-- Tombol hapus -->
                                        <form action="{{ url('Users', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger-full" onclick="return confirm('Yakin ingin menghapus {{ $item->name }}?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $supervisors->links() }}
                </div>
            </div>
        </div>
        <!-- End:: Table -->
        @if (in_array(auth()->user()->role, ['admin', 'supervisor']))
        <!-- Start:: Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah User</h3>
                </div>
                <div class="box-body p-4">
                    <form id="user-form" method="POST" action="{{ route('Users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="form-method" name="_method" value="POST">
                        <input type="hidden" id="user_id" name="id">

                        <div class="mb-3">
                            <label class="form-label font-medium">Nama</label>
                            <input type="text" class="form-control" id="nama" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-medium">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-medium">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-medium">Jenis Kelamin</label>
                            <select class="form-control" id="jenkel" name="jenkel" required>
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-medium">Role</label>
                            <input type="text" class="form-control" name="role" value="supervisor" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-medium">Outlet</label>
                            <input type="text" class="form-control" value="{{ $outlets->first()->nama_outlet }}" readonly>
                            <input type="hidden" name="outlet_id" value="{{ $outlets->first()->id }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-medium">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-medium">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label font-medium">Foto</label>
                            <input type="file" class="form-control" name="foto_profile">
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
        @endif
    </div>
</div>

<!-- SCRIPT EDIT DAN RESET -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('user-form');
        const formTitle = document.getElementById('form-title');
        const formMethod = document.getElementById('form-method');
        const userIdInput = document.getElementById('user_id');
        const namaInput = document.getElementById('nama');
        const emailInput = document.getElementById('email');
        const teleponInput = document.getElementById('telepon');
        const jenkelInput = document.getElementById('jenkel');
        const roleInput = document.getElementById('role');
        const outletInput = document.getElementById('outlet_id'); // Menambahkan outlet_id
        const resetBtn = document.getElementById('reset-btn');

        // Edit user
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const nama = this.dataset.nama;
                const email = this.dataset.email;
                const telepon = this.dataset.telepon;
                const jenkel = this.dataset.jenkel;
                const role = this.dataset.role;
                const outletId = this.dataset.outlet; // Ambil outlet_id

                form.action = `/Users/${id}`;
                formMethod.value = 'PUT';
                userIdInput.value = id;
                namaInput.value = nama;
                emailInput.value = email;
                teleponInput.value = telepon;
                jenkelInput.value = jenkel;
                roleInput.value = role;
                outletInput.value = outletId; // Set outlet_id ke input form
                formTitle.textContent = "Edit User";
            });
        });

        // Reset form
        resetBtn.addEventListener('click', function () {
            form.action = "{{ route('Users.store') }}";
            formMethod.value = "POST";
            userIdInput.value = "";
            namaInput.value = "";
            emailInput.value = "";
            teleponInput.value = "";
            jenkelInput.value = "";
            roleInput.value = "";
            outletInput.value = ""; // Reset outlet_id juga
            formTitle.textContent = "Tambah User";
        });
    });
    </script>

@endsection
