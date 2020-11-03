<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm','20');
            $table->string('nama_pasien','30');
            $table->string('diagnosa','30');
            $table->string('tindakan','20');
            $table->date('tanggal_berobat');
            $table->string('nama_dokter','40');
            $table->string('nama_petugas','40');
            $table->date('tanggal_pinjam');
          
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
        Schema::dropIfExists('tb_peminjaman');
    }
}
