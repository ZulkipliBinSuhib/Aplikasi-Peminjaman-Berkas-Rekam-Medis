<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LaporanController extends Controller
{
    public function peminjaman(){
        
        $peminjaman = DB::table('tb_peminjaman');
        $data['peminjaman'] = $peminjaman;

        if(!empty($_GET)){
            if(!empty($_GET['date'])){
              $date = $_GET['date'];
              $peminjaman->where('tb_peminjaman.tangal_pinjam',$date);
            } 
        }

        return view('laporan.peminjaman',$data);
    }


    public function pasien(){
        $pasien = DB::table('tb_peminjaman');
        $data['pasien'] = $pasien;

        return view('laporan.pasien',$data);
    }
}
