<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    Protected $table = 'karyawan';
    Protected $fillable = 
    ['id', 'nama', 'golongan', 'gaji_bersih', 'tunjangan', 'terima_gaji'];
}
