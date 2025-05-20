<!DOCTYPE html>
<html>
<head>
    <title>Invoice Pesanan</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .invoice-box { max-width: 500px; margin: auto; border: 1px solid #eee; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border-bottom: 1px solid #eee; padding: 5px 0; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <h2>Invoice Pesanan</h2>
        <p><strong>Kode Pesanan:</strong> {{ $order->kode_pesanan }}</p>
        <p><strong>Pelanggan:</strong> {{ $order->pelanggan->name ?? '-' }}</p>
        <p><strong>User:</strong> {{ $order->user->name ?? '-' }}</p>
        <p><strong>Tanggal:</strong> {{ $order->created_at->format('d-m-Y H:i') }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
        <p><strong>Metode Pembayaran:</strong> {{ $order->metode_pembayaran ?? '-' }}</p>

        <table>
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->menu->nama_menu ?? '-' }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp{{ number_format($item->harga) }}</td>
                        <td>Rp{{ number_format($item->jumlah * $item->harga) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total: Rp{{ number_format($order->total) }}</h3>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
