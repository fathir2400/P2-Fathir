<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nama_menu',
    'deskripsi',
    'kategori_id',
    'harga',
    'stok',
    'gambar',
    'outlet_id',

];

protected $casts = [
    'harga' => 'decimal:2',
];
public function outlet()
{
    return $this->belongsTo(Outlet::class, 'outlet_id', 'id');
}
public function kategori()
{
    return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
}
}
