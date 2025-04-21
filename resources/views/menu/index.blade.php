@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Menu</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Menu
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <!-- Tabel Menu -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Menu</h3>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th> <!-- Tambahan -->
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Outlet</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_menu }}" class="h-16 w-16 object-cover rounded border">
                                    @else
                                        <span class="text-gray-400 italic">Tidak ada</span>
                                    @endif
                                </td>
                                <td>{{ $item->nama_menu }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->kategori->nama ?? '-' }}</td>
                                <td>{{ $item->outlet->nama_outlet ?? '-' }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                            data-id="{{ $item->id }}"
                                            data-nama_menu="{{ $item->nama_menu }}"
                                            data-harga="{{ $item->harga }}"
                                            data-stok="{{ $item->stok }}"
                                            data-kategori_id="{{ $item->kategori_id }}"
                                            data-outlet_id="{{ $item->outlet_id }}"
                                            data-gambar="{{ $item->gambar }}">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('menu.destroy', $item->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus menu ini?')" class="ti-btn ti-btn-sm ti-btn-danger-full">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $menus->links() }}
                </div>
            </div>
        </div>

        <!-- Form Tambah/Edit -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Menu</h3>
                </div>
                <div class="box-body p-4">
                    <form id="menu-form" method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="form-group mb-3">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="text" name="nama_menu" id="nama_menu" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                @foreach ($kategoris as $kategori)
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
                            <label for="gambar">Gambar Menu</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                            @error('gambar')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3" id="preview-gambar" style="display: none;">
                            <label>Gambar Sebelumnya</label>
                            <img id="gambar-preview" src="" alt="Gambar Menu" class="w-32 h-32 object-cover rounded mt-2 border">
                        </div>

                        <button type="submit" class="ti-btn ti-btn-primary-full px-4 py-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Edit -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('menu-form');
    const formTitle = document.getElementById('form-title');
    const idInput = document.getElementById('id');
    const namaMenuInput = document.getElementById('nama_menu');
    const hargaInput = document.getElementById('harga');
    const stokInput = document.getElementById('stok');
    const kategoriInput = document.getElementById('kategori_id');
    const outletInput = document.getElementById('outlet_id');
    const previewGambarContainer = document.getElementById('preview-gambar');
    const gambarPreview = document.getElementById('gambar-preview');

    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const nama = this.dataset.nama_menu;
            const harga = this.dataset.harga;
            const stok = this.dataset.stok;
            const kategori = this.dataset.kategori_id;
            const outlet = this.dataset.outlet_id;
            const gambarPath = this.dataset.gambar;

            form.action = `/menu/${id}`;
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
            namaMenuInput.value = nama;
            hargaInput.value = harga;
            stokInput.value = stok;
            kategoriInput.value = kategori;
            outletInput.value = outlet;

            if (gambarPath) {
                previewGambarContainer.style.display = 'block';
                gambarPreview.src = `/storage/${gambarPath}`;
            } else {
                previewGambarContainer.style.display = 'none';
            }

            formTitle.textContent = "Edit Menu";
        });
    });
});
</script>

@endsection
