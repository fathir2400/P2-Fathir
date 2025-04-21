<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promos';

    protected $fillable = [
        'judul_promo',
        'deskripsi',
        'kode_promo',
        'tipe_promo',
        'nilai_promo',
        'menu_id',
        'kategori_id',
        'outlet_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    // Relasi ke Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
    }

    // Relasi ke Outlet
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    // Scope untuk hanya promo yang aktif
    public function scopeAktif($query)
    {
        return $query->where('status', true)
                     ->where('tanggal_mulai', '<=', now())
                     ->where('tanggal_selesai', '>=', now());
    }
}
