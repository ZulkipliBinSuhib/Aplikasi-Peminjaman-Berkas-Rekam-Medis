<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm','20');
            $table->string('nama_pasien','30');
            $table->string('jenis_kelamin','20');
            $table->date('tanggal_lahir');
            $table->string('usia','20');
            $table->string('alamat','20');
            $table->string('diagnosa','30');
            $table->string('tindakan','20');
            $table->date('tanggal_berobat');
            
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
        Schema::dropIfExists('tb_pasien');
    }
}
