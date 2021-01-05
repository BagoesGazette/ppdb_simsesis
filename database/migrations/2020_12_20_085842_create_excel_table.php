<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_excel', function (Blueprint $table) {
            $table->id();
            $table->string("nik");
            $table->string("nisn");
            $table->string("nama_lengkap");
            $table->enum("jenis_kelamin",['Laki-laki','Perempuan']);
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("agama");
            $table->string("golongan_darah");
            $table->integer("tinggi_badan");
            $table->integer("berat_badan");
            $table->string("status");
            $table->string("penyakit")->nulllable();
            $table->string("hobi")->nullable();
            $table->string("prestasi")->nullable();
            $table->string("desa");
            $table->string("kecamatan");
            $table->string("kabupaten");
            $table->string("provinsi");
            $table->text("alamat");
            $table->string("nomor_hp");
            $table->string("jurusan");
            $table->string('nama_siswa');
            $table->string('nama_ayah');
            $table->string('status_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('status_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('no_hp');
            $table->string('nama_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('hp_wali')->nullable();
            $table->string("asal_sekolah");
            $table->string("nama_sekolah");
            $table->enum("status_sekolah",["negeri","swasta"]);
            $table->text("alamat_sekolah");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_excel');
    }
}
