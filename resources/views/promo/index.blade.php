@extends('admin.index')

@section('content')
<div class="main-content">
    <div class="grid grid-cols-12 gap-6 mt-6">
        <!-- Tabel Promo -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Promo</h3>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kode</th>
                                <th>Jenis</th>
                                <th>Nilai</th>
                                <th>Menu</th>
                                <th>Kategori</th>
                                <th>Outlet</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promos as $key => $promo)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $promo->judul_promo }}</td>
                                <td>{{ $promo->kode_promo }}</td>
                                <td>{{ ucfirst($promo->tipe_promo) }}</td>
                                <td>{{ $promo->nilai_promo }}</td>
                                <td>{{ $promo->menu->nama_menu ?? '-' }}</td>
                                <td>{{ $promo->kategori->nama ?? '-' }}</td>
                                <td>{{ $promo->outlet->nama_outlet ?? '-' }}</td>
                                <td>
                                    <span class="badge {{ $promo->status ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $promo->status ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                            data-id="{{ $promo->id }}"
                                            data-judul_promo="{{ $promo->judul_promo }}"
                                            data-kode_promo="{{ $promo->kode_promo }}"
                                            data-tipe_promo="{{ $promo->tipe_promo }}"
                                            data-nilai_promo="{{ $promo->nilai_promo }}"
                                            data-menu_id="{{ $promo->menu_id }}"
                                            data-kategori_id="{{ $promo->kategori_id }}"
                                            data-outlet_id="{{ $promo->outlet_id }}"
                                            data-tanggal_mulai="{{ date('Y-m-d', strtotime($promo->tanggal_mulai)) }}"
                                            data-tanggal_selesai="{{ date('Y-m-d', strtotime($promo->tanggal_selesai)) }}"

                                            data-status="{{ $promo->status }}">
                                            <i class="ri-edit-line"></i>
                                        </a>

                                        <form action="{{ route('promo.destroy', $promo->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus promo ini?')" class="ti-btn ti-btn-sm ti-btn-danger-full">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $promos->links() }}
                </div>
            </div>
        </div>

        <!-- Form Tambah/Edit Promo -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Promo</h3>
                </div>
                <div class="box-body p-4">
                    <form id="promo-form" method="POST" action="{{ route('promo.store') }}">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="form-group mb-3">
                            <label for="judul_promo">Judul</label>
                            <input type="text" name="judul_promo" id="judul_promo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kode_promo">Kode Promo</label>
                            <input type="text" name="kode_promo" id="kode_promo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tipe_promo">Tipe</label>
                            <select name="tipe_promo" id="tipe_promo" class="form-control" required>
                                <option value="persentase">Persentase</option>
                                <option value="nominal">Nominal</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nilai_promo">Nilai</label>
                            <input type="number" name="nilai_promo" id="nilai_promo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="menu_id">Menu (Opsional)</label>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">-</option>
                                @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->nama_menu }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id">Kategori (Opsional)</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="">-</option>
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama }}</option>
                                @endforeach
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

                        <div class="form-group mb-3">
                            <label for="tanggal_mulai">Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_selesai">Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>

                        <div class="flex justify-between gap-3">
                            <button type="submit" class="ti-btn ti-btn-primary-full w-full">Simpan</button>
                            <button type="button" id="reset-btn" class="ti-btn ti-btn-secondary w-full">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('promo-form');
    const formTitle = document.getElementById('form-title');

    const inputs = {
        id: document.getElementById('id'),
        judul_promo: document.getElementById('judul_promo'),
        kode_promo: document.getElementById('kode_promo'),
        tipe_promo: document.getElementById('tipe_promo'),
        nilai_promo: document.getElementById('nilai_promo'),
        menu_id: document.getElementById('menu_id'),
        kategori_id: document.getElementById('kategori_id'),
        outlet_id: document.getElementById('outlet_id'),
        tanggal_mulai: document.getElementById('tanggal_mulai'),
        tanggal_selesai: document.getElementById('tanggal_selesai'),
        status: document.getElementById('status'),
    };

    const editButtons = document.querySelectorAll('.edit-btn');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            form.action = `/promo/${this.dataset.id}`;
            if (!form.querySelector('input[name="_method"]')) {
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);
            } else {
                form.querySelector('input[name="_method"]').value = 'PUT';
            }

            Object.keys(inputs).forEach(key => {
                if (this.dataset[key] !== undefined) {
                    inputs[key].value = this.dataset[key];
                }
            });

            formTitle.textContent = "Edit Promo";
        });
    });

    document.getElementById('reset-btn').addEventListener('click', function () {
        form.reset();
        form.action = `{{ route('promo.store') }}`;
        form.querySelector('input[name="_method"]')?.remove();
        formTitle.textContent = "Tambah Promo";
    });
});
</script>
@endsection
