<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengembalian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengembalian', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm','20');
            $table->string('nama_pasien','30');
            $table->date('tanggal_pengembalian');
            $table->string('nama_petugas','40');
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
        Schema::dropIfExists('tb_pengembalian');
    }
}
