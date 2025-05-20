@extends('admin.index')

@section('content')

<div class="main-content">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Pesanan</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Pesanan
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 text-textmuted rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <!-- Tabel Pesanan -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header flex justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Pesanan</h3>
                    <a href="{{ route('orders.invoice') }}" class="ti-btn ti-btn-secondary-full" style="padding: 2px 6px; font-size: 0.75rem;">
                        Invoice
                        <i class="fe fe-arrow-right rtl:rotate-180 ms-1 rtl:ms-0 align-middle"></i>
                    </a>
                </div>
                <div class="table-responsive p-6">
                    <table class="table">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th>No</th>
                                <th>Kode Pesanan</th>
                                <th>Pelanggan</th>
                                <th>Status</th>
                                <th>Meja</th>
                                <th>Pesanan</th>
                                <th>Total</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $key => $order)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $order->kode_pesanan }}</td>
                                    <td>{{ $order->pelanggan->name ?? '-' }}</td>
                                    <td>{{ ucfirst($order->status) }}</td>
                                    <td>{{ $order->meja->nomor_meja ?? '-' }}</td>

                                    <td>
                                        <ul class="list-disc pl-5">
                                            @forelse ($order->items as $item)
                                                <li>
                                                    {{ $item->menu->nama_menu ?? 'Menu tidak ditemukan' }} —
                                                    {{ $item->jumlah }} × Rp{{ number_format($item->harga) }} =
                                                    Rp{{ number_format($item->jumlah * $item->harga) }}
                                                </li>
                                            @empty
                                                <li>Tidak ada menu.</li>
                                            @endforelse
                                        </ul>
                                    </td>
                                    <td>Rp{{ number_format($order->total) }}</td>

                                    <td>
                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-success-full edit-btn"
                                        data-id="{{ $order->id }}"
                                        data-kode_pesanan="{{ $order->kode_pesanan }}"
                                        data-pelanggan_id="{{ $order->pelanggan_id }}"
                                        data-status="{{ $order->status }}"
                                        data-total="{{ $order->total }}"
                                            data-meja_id="{{ $order->meja_id }}"
                                        data-items='@json($order->items)'>
                                        <i class="ri-edit-line"></i>
                                        </button>
                                        <a href="{{ route('order.detail', $order->id) }}" class="ti-btn ti-btn-sm ti-btn-info-full" title="Lihat Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('orders.print', $order->id) }}" target="_blank" class="ti-btn ti-btn-sm ti-btn-warning-full" title="Cetak Invoice">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus pesanan ini?')" class="ti-btn ti-btn-sm ti-btn-danger-full">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-gray-500">Belum ada pesanan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $orders->links() }}
                </div>
            </div>
        </div>

        <!-- Form Tambah/Edit Pesanan -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box custom-box shadow-lg rounded-md">
                <div class="box-header bg-primary text-white rounded-t-md p-3">
                    <h3 id="form-title" class="text-lg font-semibold">Tambah Pesanan</h3>
                </div>
                <div class="box-body p-4">
                    <form id="order-form" method="POST" action="{{ route('orders.store') }}">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label for="kode_pesanan">Kode Pesanan</label>
                            <input type="text" name="kode_pesanan" id="kode_pesanan" class="form-control"
                            value="{{ old('kode_pesanan', $autoKode ?? '') }}" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="pelanggan_id">Pelanggan</label>
                            <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                                @foreach($pelanggans as $pelanggan)
                                    <option value="{{ $pelanggan->id }}" {{ old('pelanggan_id') == $pelanggan->id ? 'selected' : '' }}>
                                        {{ $pelanggan->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div id="menu-container">
                            <div class="menu-item mb-3">
                                <label for="menu">Menu</label>
                                <select name="menu_id[]" class="form-control menu-select">
                                    @foreach($menus as $menu)
                                        @if($menu->outlet_id == auth()->user()->outlet_id)  <!-- Memastikan hanya menu dengan outlet yang sesuai yang ditampilkan -->
                                            <option value="{{ $menu->id }}" data-harga="{{ $menu->harga }}">
                                                {{ $menu->nama_menu }} - Rp{{ number_format($menu->harga) }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <input type="number" name="jumlah[]" class="form-control" value="1" min="1" required>

                                <div class="subtotal mt-2 text-gray-500">Subtotal: Rp0</div> <!-- Menampilkan Subtotal per item -->
                            </div>
                        </div><br>
                        <button type="button" id="add-menu-btn">+ Tambah Menu</button><br>


                        <div class="form-group mb-3">
                            <label for="meja_id">Meja</label>
                            <select name="meja_id" id="meja_id" class="form-control">
                                @foreach ($mejas as $meja)
                                <option value="{{ $meja->id }}"
                                  {{ (old('meja_id') == $meja->id) || (isset($order) && $order->meja_id == $meja->id) ? 'selected' : '' }}>
                                    Meja {{ $meja->nomor_meja }}
                                </option>
                              @endforeach


                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="paid" {{ old('status') == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="canceled" {{ old('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="total">Total</label>
                            <input type="number" name="total" id="total" class="form-control" required value="{{ old('total') }}">
                        </div>

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
    document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function () {
        // Ganti judul form
        document.getElementById('form-title').textContent = "Edit Pesanan";

        // Ambil data dari button
        const id = this.getAttribute('data-id');
        const kodePesanan = this.getAttribute('data-kode_pesanan');
        const pelangganId = this.getAttribute('data-pelanggan_id');
        const status = this.getAttribute('data-status');
        const total = this.getAttribute('data-total');
        const mejaId = this.getAttribute('data-meja_id');
        const items = JSON.parse(this.getAttribute('data-items'));

        // Set nilai ke form
        document.getElementById('id').value = id;
        document.getElementById('kode_pesanan').value = kodePesanan;
        document.getElementById('pelanggan_id').value = pelangganId;
        document.getElementById('status').value = status;
        document.getElementById('total').value = total;
        document.getElementById('meja_id').value = mejaId;

        // Kosongkan container menu terlebih dahulu
        const menuContainer = document.getElementById('menu-container');
        menuContainer.innerHTML = '';

        // Tambahkan item menu dari data
        items.forEach(item => {
            const menuItem = createMenuItem(item.menu_id, item.jumlah);
            menuContainer.appendChild(menuItem);
        });

        // Update total subtotal dan total keseluruhan
        updateTotal();

        // Scroll ke atas supaya user bisa lihat form edit
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});

   // Data outlet dan menu dipassing dari blade
   const userOutletId = {{ auth()->user()->outlet_id }};
    const menus = @json($menus);

    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('order-form');
        const menuContainer = document.getElementById('menu-container');
        const totalInput = document.getElementById('total');

        // Tambah menu baru
        document.getElementById('add-menu-btn')?.addEventListener('click', function () {
            const menuItem = createMenuItem();
            menuContainer.appendChild(menuItem);
            updateTotal();
        });

        // Fungsi bikin menu item baru, dgn filter outlet
        function createMenuItem(selectedId = null, quantity = 1) {
            const menuItem = document.createElement('div');
            menuItem.classList.add('menu-item', 'mb-3');

            const selectMenu = document.createElement('select');
            selectMenu.name = 'menu_id[]';
            selectMenu.classList.add('form-control', 'menu-select');

            // Filter menu outlet
            menus.filter(menu => menu.outlet_id == userOutletId)
                 .forEach(menu => {
                const option = document.createElement('option');
                option.value = menu.id;
                option.textContent = `${menu.nama_menu} - Rp${menu.harga.toLocaleString('id-ID')}`;
                option.setAttribute('data-harga', menu.harga);
                if (selectedId && menu.id === selectedId) {
                    option.selected = true;
                }
                selectMenu.appendChild(option);
            });

            const inputQuantity = document.createElement('input');
            inputQuantity.type = 'number';
            inputQuantity.name = 'jumlah[]';
            inputQuantity.classList.add('form-control', 'mt-1');
            inputQuantity.value = quantity;
            inputQuantity.min = 1;
            inputQuantity.required = true;

            const subtotalDisplay = document.createElement('div');
            subtotalDisplay.classList.add('subtotal', 'mt-2', 'text-gray-500');
            subtotalDisplay.textContent = `Subtotal: Rp0`;

            selectMenu.addEventListener('change', updateTotal);
            inputQuantity.addEventListener('input', updateTotal);

            menuItem.appendChild(selectMenu);
            menuItem.appendChild(inputQuantity);
            menuItem.appendChild(subtotalDisplay);

            return menuItem;
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.menu-item').forEach(item => {
                const select = item.querySelector('select');
                const quantityInput = item.querySelector('input[name="jumlah[]"]');
                const harga = parseFloat(select.options[select.selectedIndex].getAttribute('data-harga')) || 0;
                const qty = parseInt(quantityInput.value) || 1;
                const subtotal = harga * qty;
                item.querySelector('.subtotal').textContent = `Subtotal: Rp${subtotal.toLocaleString('id-ID')}`;
                total += subtotal;
            });

            totalInput.value = total;
        }

        // Reset
        document.getElementById('reset-btn').addEventListener('click', function () {
            form.reset();
            menuContainer.innerHTML = '';
            updateTotal();
        });

        // AUTO: jalankan updateTotal() pertama kali
        updateTotal();
    });

</script>

@endsection
