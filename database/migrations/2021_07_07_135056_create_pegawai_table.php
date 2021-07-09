<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 10);
            $table->string('nama', 45);
            $table->text('alamat');
            $table->string('tempat_lahir', 10);
            $table->date('tanggal_lahir');
            $table->string('telp', 12);
            $table->integer('agama_id');
            $table->integer('jabatan_id');
            $table->integer('golongan_id');
            $table->timestamps();

            $table->foreign('agama_id')->references('id')->on('agama');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
            $table->foreign('golongan_id')->references('id')->on('golongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
