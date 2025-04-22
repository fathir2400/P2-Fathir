@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Meja</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Meja
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <!-- Tabel Meja -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Meja</h3>
                    <a href="{{ route('meja.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Nomor Meja</th>
                                <th>Kapasitas</th>
                                <th>Status</th>
                                <th>Outlet</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mejas as $key => $meja)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $meja->nomor_meja }}</td>
                                <td> {{ $meja->kapasitas ? $meja->kapasitas . ' orang' : '-' }}</td>
                                <td>{{ ucfirst($meja->status) }}</td>
                                <td>{{ $meja->outlet->nama_outlet ?? '-' }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                            data-id="{{ $meja->id }}"
                                            data-nomor_meja="{{ $meja->nomor_meja }}"
                                            data-kapasitas="{{ $meja->kapasitas }}"
                                            data-status="{{ $meja->status }}"
                                            data-outlet_id="{{ $meja->outlet_id }}">
                                            <i class="ri-edit-line"></i>
                                        </button>
                                        <form action="{{ route('meja.destroy', $meja->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus meja ini?')" class="ti-btn ti-btn-sm ti-btn-danger-full">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $mejas->links() }}
                </div>
            </div>
        </div>

        <!-- Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Meja</h3>
                </div>
                <div class="box-body p-4">
                    <form id="meja-form" method="POST" action="{{ route('meja.store') }}">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="form-group mb-3">
                            <label for="nomor_meja">Nomor Meja</label>
                            <input type="text" name="nomor_meja" id="nomor_meja" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="number" name="kapasitas" id="kapasitas" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="kosong">Kosong</option>
                                <option value="terisi">Terisi</option>
                                <option value="dipesan">Dipesan</option>
                                <option value="dibooking">Dibooking</option>
                            </select>
                        </div>

                        @if(auth()->user()->role === 'admin_pusat')
                            <div class="form-group mb-3">
                                <label for="outlet_id">Outlet</label>
                                <select name="outlet_id" id="outlet_id" class="form-control">
                                    @foreach($outlets as $outlet)
                                        <option value="{{ $outlet->id }}">{{ $outlet->nama_outlet }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <input type="hidden" name="outlet_id" id="outlet_id" value="{{ auth()->user()->outlet_id }}">
                        @endif

                        <button type="submit" class="ti-btn ti-btn-primary-full px-4 py-2">Simpan</button>
                        <button type="button" id="reset-btn" class="ti-btn ti-btn-secondary-full px-4 py-2 ml-2">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Edit -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('meja-form');
    const formTitle = document.getElementById('form-title');
    const idInput = document.getElementById('id');
    const nomorMejaInput = document.getElementById('nomor_meja');
    const kapasitasInput = document.getElementById('kapasitas');
    const statusInput = document.getElementById('status');
    const outletInput = document.getElementById('outlet_id');

    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const nomor_meja = this.dataset.nomor_meja;
            const kapasitas = this.dataset.kapasitas;
            const status = this.dataset.status;
            const outlet_id = this.dataset.outlet_id;

            form.action = `/meja/${id}`;
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
            nomorMejaInput.value = nomor_meja;
            kapasitasInput.value = kapasitas;
            statusInput.value = status;
            outletInput.value = outlet_id;

            formTitle.textContent = "Edit Meja";
        });
    });
    // Tombol reset form
document.getElementById('reset-btn').addEventListener('click', function () {
    form.reset(); // Reset seluruh field ke default

    form.action = "{{ route('meja.store') }}"; // Set kembali ke route store

    // Hapus _method PUT jika ada
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) methodInput.remove();

    idInput.value = ''; // Kosongkan input id
    formTitle.textContent = "Tambah Meja"; // Reset judul form
});

});
</script>

@endsection
