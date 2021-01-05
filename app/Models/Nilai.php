<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "tb_nilai";
    protected $fillable = [
        "nama_siswa",
        "ipa",
        "matematika",
        "bahasa_inggris",
        "bahasa_indonesia",
        "semester",
        "jumlah",
        "rata-rata"
    ];
}
