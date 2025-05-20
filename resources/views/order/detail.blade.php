@extends('admin.index')

@section('content')
<div class="main-content max-w-lg ml-12 mt-8">
    <h2 class="text-2xl font-semibold mb-4">Detail Pesanan</h2>

    @if(session('success'))
        <div class="alert alert-success mb-2">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('orders.updatePayment', $order->id) }}">
        @csrf
        <div class="mb-3">
            <label class="block font-medium mb-1">Kode Pesanan</label>
            <input type="text" class="form-control" value="{{ $order->kode_pesanan }}" readonly>
        </div>
        <div class="mb-3">
            <label class="block font-medium mb-1">Nama User</label>
            <input type="text" class="form-control" value="{{ $order->user->name ?? '-' }}" readonly>
        </div>
        <div class="mb-3">
            <label class="block font-medium mb-1">Nama Pelanggan</label>
            <input type="text" class="form-control" value="{{ $order->pelanggan->name ?? '-' }}" readonly>
        </div>
        <div class="mb-3">
            <label class="block font-medium mb-1">Metode Pembayaran</label>
            <select name="metode_pembayaran" id="metode_pembayaran" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="cash"  {{ $order->metode_pembayaran == 'cash' ? 'selected' : '' }}>Cash</option>
                <option value="qris"  {{ $order->metode_pembayaran == 'qris' ? 'selected' : '' }}>QRIS</option>
                <option value="debit" {{ $order->metode_pembayaran == 'debit' ? 'selected' : '' }}>Debit</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="block font-medium mb-1">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ ucfirst($order->status) }}" readonly>
        </div>
        <button type="submit" class="ti-btn ti-btn-primary-full mt-3">Simpan Perubahan</button>
        <a href="{{ route('orders.index') }}" class="ti-btn ti-btn-secondary-full mt-3 ml-2">Kembali</a>
        @if($order->status !== 'canceled')

    </form>
@endif
<form method="POST" action="{{ route('orders.cancel', $order->id) }}" style="display: inline;">
    @csrf
    <button type="submit" class="ti-btn ti-btn-danger-full mt-3 ml-2"
        onclick="return confirm('Yakin ingin membatalkan pesanan ini?')">
        Batalkan
    </button>
    </form>
</div>

{{-- Otomatis set status jadi Paid saat metode pembayaran dipilih --}}
<script>
    document.addEventListener("DOMContentLoaded", function(){
        document.getElementById('metode_pembayaran').addEventListener('change', function(){
            if(this.value !== '') {
                document.getElementById('status').value = 'Paid';
            }
        });
    });
</script>
@endsection
