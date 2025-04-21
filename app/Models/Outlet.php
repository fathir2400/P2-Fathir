<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_outlet',
        'alamat',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',


    ];
    public function users()
    {
        return $this->hasMany(User::class, 'outlet_id');
    }
    public function menu()
    {
        return $this->hasMany(Menu::class, 'outlet_id');
    }
}
