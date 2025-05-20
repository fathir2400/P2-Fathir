<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{

    protected $fillable = [
        'nomor_meja',
        'kapasitas',
        'status',
        'outlet_id',

    ];

    /**
     * Relasi ke model Menu
     */
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
    public function meja() {
        return $this->hasMany(Meja::class);
    }
}
