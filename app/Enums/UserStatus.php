<?php
namespace App\Enums;

enum UserStatus: string {
    case Aktif = 'aktif';

    case Keluar = 'keluar';

    case Dikeluarkan = 'dikeluarkan';

    case Pindah = 'pindah';
    
    case Lulus = 'lulus';



} 