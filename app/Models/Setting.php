<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SettingControlle;


class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $primaryKey = 'id_setting';
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telepon',
        'logo',

        
    ];


    // protected $table = 'setting';

    // protected $primary = 'id_setting';

    // protected $fillable = ['nama_sekolah', 'email', 'alamat', 'telepon', 'logo'];
}
