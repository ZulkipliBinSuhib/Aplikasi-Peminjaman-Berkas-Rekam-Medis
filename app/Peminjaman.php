<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'tb_peminjaman';
    protected $filable = ['no_rm','nama_pasien','diagnosa','tindakan','tanggal_berobat','nama_dokter','nama_petugas','tanggal_pinjam'];

}
