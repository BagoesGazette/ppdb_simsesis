<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    use HasFactory;

    protected $table = "tb_dataPribadi";
    protected $fillable = [
        "nik",
        "nisn",
        "nama_lengkap",
        "jenis_kelamin",
        "tempat_lahir",
        "tanggal_lahir",
        "agama",
        "golongan_darah",
        "tinggi_badan",
        "berat_badan",
        "status",
        "penyakit",
        "hobi",
        "prestasi",
        "desa",
        "kecamatan",
        "kabupaten",
        "provinsi",
        "alamat",
        "no_hp",
        "jurusan",
        "image"
    ];
}
