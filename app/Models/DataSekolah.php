<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    use HasFactory;

    protected $table    = "tb_sekolah";
    protected $fillable = [
        "nama_siswa",
        "asal_sekolah",
        "nama_sekolah",
        "status_sekolah",
        "alamat_sekolah"
    ];
}
