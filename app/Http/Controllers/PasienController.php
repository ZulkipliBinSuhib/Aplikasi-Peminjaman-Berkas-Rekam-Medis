<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pasien;

use PDF;
use Illuminate\Support\Carbon;

class PasienController extends Controller
{
    public function index(){
        $data['pasien'] = DB::table('tb_pasien')->get();
        return view('pasien.index',$data);
    }

    public function create()
    {
        
        return view('pasien.create');
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
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'tanggal_berobat' => 'required',
            
            
            
        ]);
        
            DB::table('tb_pasien')->insert(['no_rm'=>$request->no_rm,
            'nama_pasien'=>$request->nama_pasien,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'usia'=>$request->usia,
            'alamat'=>$request->alamat,
            'diagnosa'=>$request->diagnosa,
            'tindakan'=>$request->tindakan,
            'tanggal_berobat'=>$request->tanggal_berobat,
            
            
             ]);    
      
        
        return redirect('pasien')->with('status', 'Data added successfully.');
    }

    public function edit($id)
    {
        $pasien = DB::table('tb_pasien')->where('id',$id)->first();
        $data['pasien'] = $pasien;
        return view('pasien.edit',$data); 
    }
    public function show($id){
        //
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_rm' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'diagnosa' => 'required',
            'tanggal_berobat' => 'required',
            
            
        ]);
        
        DB::table('tb_pasien')->where('id',$id)->update(['no_rm'=>$request->no_rm,
        'nama_pasien'=>$request->nama_pasien,
        'jenis_kelamin'=>$request->jenis_kelamin,
        'tanggal_lahir'=>$request->tanggal_lahir,
        'usia'=>$request->usia,
        'alamat'=>$request->alamat,
        'diagnosa'=>$request->diagnosa,
        'tindakan'=>$request->tindakan,
        'tanggal_berobat'=>$request->tanggal_berobat,
        
             ]);    
        
        
        return redirect('pasien')->with('status', 'Data updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('tb_pasien')->where('id',$id)->delete();
        return redirect('pasien')->with('status', 'Data deleted successfully .');
    }

    public function cetak(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $date = date('d_M_Y');

        if(isset($request->from_date)){
            $pasien = DB::table('tb_pasien');
            $pasien = DB::table('tb_pasien')->whereBetween('tanggal_berobat', array($request->from_date, $request->to_date))
                        ->get();
        }else{
            $pasien = DB::table('tb_pasien');
            $pasien = DB::table('tb_pasien')
                        ->get();
        }

        $pdf = PDF::loadview('pasien/pasien_pdf', ['pasien' => $pasien,'from_date' => $from_date , 'to_date' => $to_date,'date'=>$date] )->setPaper('a4', 'landscape');
        return $pdf->download('LAPORAN-DATA-PASIEN'.date('d_M_Y').'.pdf');
    }
    
    public function cetak_test(){
 
    	return view('pasien/cetak_test');
    }
    public function cetak_id($id){
        $date = date('d_M_Y');
        $pasien = DB::table('tb_pasien')
        ->join('tb_peminjaman','tb_pasien.no_rm','=','tb_peminjaman.no_rm')
        ->select('tb_peminjaman.no_rm','tb_peminjaman.nama_pasien','tb_peminjaman.nama_dokter','tb_peminjaman.nama_petugas','tb_pasien.jenis_kelamin','tb_pasien.tanggal_lahir','tb_pasien.usia','tb_pasien.alamat','tb_pasien.diagnosa','tb_pasien.tindakan','tb_pasien.tanggal_berobat')
        ->first();
 
    	$pdf = PDF::loadview('pasien/pasien_id_pdf',['pasien'=>$pasien,'date'=>$date]);
    	return $pdf->download('laporan-data-pasien-pdf');
    }

}
