<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pasien;
class PengembalianController extends Controller
{
    public function index(){
        $data['pengembalian'] = DB::table('tb_pengembalian')
                                ->join('tb_peminjaman','tb_peminjaman.no_rm','=','tb_pengembalian.no_rm')
                                ->select('tb_peminjaman.tanggal_pinjam','tb_peminjaman.nama_pasien','tb_pengembalian.no_rm','tb_pengembalian.tanggal_pengembalian','tb_pengembalian.nama_petugas','tb_pengembalian.id')->get();
        return view('pengembalian.index',$data);
    }

    public function create()
    {
        $get_nama = DB::table('tb_pasien')->pluck('nama_pasien');
        $data['get_nama'] = $get_nama;
        return view('pengembalian.create');
    }

    public function ajax_create(Request $request){
        $get = $request->get;
        $pasien = DB::table('tb_pasien')
                ->where('tb_pasien.id','=',$get)->first();
                
        if(isset($pasien)){
            $data = array(
                'nama_pasien' => $pasien->nama_pasien,
                'no_rm' => $pasien->no_rm,
                
            );
            
        return response()->json(['data'=>$data ]);
        }
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'tanggal_pengembalian' => 'required',
            'nama_petugas' => 'required',
            
            
            
        ]);
        
            DB::table('tb_pengembalian')->insert(['no_rm'=>$request->no_rm,
            'nama_pasien'=>$request->nama_pasien,
            'tanggal_pengembalian'=>$request->tanggal_pengembalian,
            'nama_petugas'=>$request->nama_petugas,
            
            
             ]);    
      
        
        return redirect('pengembalian')->with('status', 'Data added successfully.');
    }

    public function destroy($id)
    {
        DB::table('tb_pengembalian')->where('id',$id)->delete();
        return redirect('pengembalian')->with('status', 'Data deleted successfully .');
    }

    

}
