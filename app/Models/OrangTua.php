<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;

    protected $table    = "tb_orangtua";
    protected $fillable = [
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
        "hp_wali"
    ];
}
