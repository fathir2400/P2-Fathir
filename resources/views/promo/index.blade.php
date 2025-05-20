@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Promo</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Promo
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <!-- Tabel Promo -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Promo</h3>
                    <a href="{{ route('promo.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Nama Promo</th>
                                <th>Diskon</th>
                                <th>Menu</th>
                                <th>Outlet</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promos as $key => $promo)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $promo->nama_promo }}</td>
                                <td>{{ $promo->diskon }}%</td>
                                <td>{{ $promo->menu ? $promo->menu->nama_menu : 'Semua Menu' }}</td>
                                <td>{{ $promo->outlet->nama_outlet ?? '-' }}</td>
                                <td>{{ $promo->tanggal_mulai }}</td>
                                <td>{{ $promo->tanggal_akhir }}</td>

                                <td>
                                    <div class="flex gap-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                            data-id="{{ $promo->id }}"
                                            data-nama_promo="{{ $promo->nama_promo }}"
                                            data-diskon="{{ $promo->diskon }}"
                                            data-menu_id="{{ $promo->menu_id }}"
                                            data-tanggal_mulai="{{ $promo->tanggal_mulai }}"
                                            data-tanggal_akhir="{{ $promo->tanggal_akhir }}"
                                            data-outlet_id="{{ $promo->outlet_id }}">
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
        @if (in_array(auth()->user()->role, ['admin', 'supervisor','kasir','waiters']))
        <!-- Form Promo -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white p-3 rounded-t-md">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Promo</h3>
                </div>
                <div class="box-body p-4">
                    <form id="promo-form" method="POST" action="{{ route('promo.store') }}">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="_method" id="method" value="POST">

                        <div class="form-group mb-3">
                            <label for="nama_promo">Nama Promo</label>
                            <input type="text" name="nama_promo" id="nama_promo" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="diskon">Diskon (%)</label>
                            <input type="number" name="diskon" id="diskon" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="menu_id">Menu</label>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Semua Menu</option>
                                @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->nama_menu }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_akhir">Tanggal Akhir</label>
                            <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
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

                        <div class="flex justify-between gap-3 mt-4">
                            <button type="submit" class="ti-btn ti-btn-primary-full w-full">Simpan</button>
                            <button type="button" id="reset-btn" class="ti-btn ti-btn-secondary w-full">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- JS Edit -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('promo-form');
    const formTitle = document.getElementById('form-title');
    const methodInput = document.getElementById('method');
    const inputs = {
        id: document.getElementById('id'),
        nama_promo: document.getElementById('nama_promo'),
        diskon: document.getElementById('diskon'),
        menu_id: document.getElementById('menu_id'),
        tanggal_mulai: document.getElementById('tanggal_mulai'),
        tanggal_akhir: document.getElementById('tanggal_akhir'),
        outlet_id: document.getElementById('outlet_id'),


    };

    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            form.action = `/promo/${this.dataset.id}`;
            methodInput.value = 'PUT';

            inputs.id.value = this.dataset.id;
            inputs.nama_promo.value = this.dataset.nama_promo;
            inputs.diskon.value = this.dataset.diskon;
            inputs.menu_id.value = this.dataset.menu_id;
            inputs.tanggal_mulai.value = this.dataset.tanggal_mulai;
            inputs.tanggal_akhir.value = this.dataset.tanggal_akhir;
            inputs.outlet_id.value = this.dataset.outlet_id;

            formTitle.textContent = "Edit Promo";
        });
    });

    document.getElementById('reset-btn').addEventListener('click', function () {
        form.reset();
        form.action = `{{ route('promo.store') }}`;
        methodInput.value = 'POST';
        formTitle.textContent = "Tambah Promo";
    });
});
</script>

@endsection
