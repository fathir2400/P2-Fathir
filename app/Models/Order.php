<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pesanan',
        'user_id',
        'pelanggan_id',
        'outlet_id',
        'status',
        'meja_id',
        'metode_pembayaran',
        'subtotal',
        'diskon',
        'pajak',
        'total',
    ];

    // Event boot untuk generate kode_pesanan otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            // Tanggal hari ini dalam format YYYYMMDD
            $tanggal = Carbon::now()->format('Ymd');

            // Hitung jumlah pesanan yang dibuat hari ini
            $jumlahHariIni = self::whereDate('created_at', Carbon::today())->count() + 1;

            // Format urutan menjadi 3 digit, misalnya 001, 002
            $urutan = str_pad($jumlahHariIni, 3, '0', STR_PAD_LEFT);

            // Gabungkan menjadi kode pesanan, contoh: INV-20250423-001
            $order->kode_pesanan = 'INV-' . Carbon::now()->format('Ymd') . '-' . $urutan;
        });
    }

    // Relasi ke user (pembuat pesanan)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'pelanggan_id');  // Mengambil data pelanggan dari tabel users
    }


    // Relasi ke outlet
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
    public function details() {
        return $this->hasMany(Order_detail::class);
    }
    public function meja() {
        return $this->belongsTo(Meja::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

}
