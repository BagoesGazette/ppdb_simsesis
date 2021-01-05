<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnggahDokumen extends Model
{
    use HasFactory;

    protected $table    = "tb_dokumen";
    protected $fillable = [
        "akta_lahir",
        "skl",
        "kk",
        "raport",
        "lainnya"
    ];

}
