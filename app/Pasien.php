<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'tb_pasien';
    protected $filable = ['no_rm','nama_pasien','jenis_kelamin','tanggal_lahir','usia','alamat','diagnosa','tindakan','tanggal_berobat'];
}
