<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'nama_promo',
        'diskon',
        'outlet_id',
        'tanggal_mulai',
        'tanggal_akhir',
    ];

    /**
     * Relasi ke model Menu
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
}
