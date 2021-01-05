<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_auth', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap");
            $table->string("email");
            $table->string("username");
            $table->string("password");
            $table->enum("role",["admin","siswa"]);
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
        Schema::dropIfExists('tb_auth');
    }
}
