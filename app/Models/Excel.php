<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    use HasFactory;
    protected $table = "tb_excel";
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
        "nomor_hp",
        "jurusan",
        "nama_siswa",
        "nama_ayah",
        "status_ayah",
        "pendidikan_ayah",
        "pekerjaan_ayah",
        "penghasilan_ayah",
        "nama_ibu",
        "status_ibu",
        "pendidikan_ibu",
        "pekerjaan_ibu",
        "penghasilan_ibu",
        "no_hp",
        "nama_wali",
        "pendidikan_wali",
        "pekerjaan_wali",
        "penghasilan_wali",
        "hp_wali",
        "nama_siswa",
        "asal_sekolah",
        "nama_sekolah",
        "status_sekolah",
        "alamat_sekolah"
    ];
}
