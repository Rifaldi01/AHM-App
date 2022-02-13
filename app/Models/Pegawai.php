<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable  = [
        'nama_lengkap',
        'jabatan_id',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email',
    ];
}
