<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dataPribadi', function (Blueprint $table) {
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
            $table->string("no_hp");
            $table->string("jurusan");
            $table->string("image");
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
        Schema::dropIfExists('tb_dataPribadi');
    }
}
