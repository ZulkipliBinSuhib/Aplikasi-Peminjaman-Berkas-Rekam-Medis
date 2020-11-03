<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Pasien;

class PeminjamanController extends Controller
{
    public function index(){
        $data['peminjaman'] = DB::table('tb_peminjaman')->get();

        return view('peminjaman.index',$data);
    }

    public function create()
    {
        $data['get_nama'] = DB::table('tb_pasien')->pluck('nama_pasien');
      
        return view('peminjaman.create',$data);
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
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'tanggal_berobat' => 'required',
            'nama_dokter' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required',
            
            
        ]);
        
            DB::table('tb_peminjaman')->insert(['no_rm'=>$request->no_rm,
            'nama_pasien'=>$request->nama_pasien,
            'diagnosa'=>$request->diagnosa,
            'tindakan'=>$request->tindakan,
            'tanggal_berobat'=>$request->tanggal_berobat,
            'nama_dokter'=>$request->nama_dokter,
            'nama_petugas'=>$request->nama_petugas,
            'tanggal_pinjam'=>$request->tanggal_pinjam,
            
            
            
             ]);    
      
        
        return redirect('peminjaman')->with('status', 'Data added successfully.');
    }

    public function edit($id)
    {
        $peminjaman = DB::table('tb_peminjaman')->where('id',$id)->first();
        $data['peminjaman'] = $peminjaman;
        
        return view('peminjaman.edit',$data); 
    }
    public function show($id){
        //
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'tanggal_berobat' => 'required',
            'nama_dokter' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required',
            
        ]);
        
        DB::table('tb_peminjaman')->where('id',$id)->update(['no_rm'=>$request->no_rm,
        'nama_pasien'=>$request->nama_pasien,
        'diagnosa'=>$request->diagnosa,
        'tindakan'=>$request->tindakan,
        'tanggal_berobat'=>$request->tanggal_berobat,
        'nama_dokter'=>$request->nama_dokter,
        'nama_petugas'=>$request->nama_petugas,
        'tanggal_pinjam'=>$request->tanggal_pinjam,
             ]);    
        
        
        return redirect('peminjaman')->with('status', 'Data updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('tb_peminjaman')->where('id',$id)->delete();
        return redirect('peminjaman')->with('status', 'Data deleted successfully .');
    }
    public function cetak(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $date = date('d_M_Y');

        if(isset($request->from_date)){
            $peminjaman = DB::table('tb_peminjaman');
            $peminjaman = DB::table('tb_peminjaman')->whereBetween('tanggal_pinjam', array($request->from_date, $request->to_date))
                        ->get();
        }else{
            $peminjaman = DB::table('tb_peminjaman');
            $peminjaman = DB::table('tb_peminjaman')
                        ->get();
        }

        $pdf = PDF::loadview('peminjaman/peminjaman_cetakSemua_pdf', ['peminjaman' => $peminjaman,'from_date' => $from_date , 'to_date' => $to_date,'date'=>$date] )->setPaper('a4', 'landscape');
        return $pdf->download('LAPORAN-DATA-PEMINJAMAN'.date('d_M_Y').'.pdf');
    }
    public function cetak_id($id){
        $date = date('d_M_Y');
        $peminjaman = DB::table('tb_peminjaman')->first();
 
    	$pdf = PDF::loadview('peminjaman/peminjaman_pdf',['peminjaman'=>$peminjaman,'date'=>$date]);
    	return $pdf->download('laporan-peminjaman-pdf');
    }
    public function ajax_create(Request $request){
        $get = $request->get;
       
       
        $pasien= Pasien::where('nama_pasien','=',$get)->first();
       
        if(isset($pasien)){
            $data = array(
                'nama_pasien' => $pasien['nama_pasien'],
                'no_rm' => $pasien['no_rm'],
                'diagnosa' => $pasien['diagnosa'],
                'tindakan' => $pasien['tindakan'],
                'tanggal_berobat' => $pasien['tanggal_berobat']
            ); 
        return response()->json($data);
      
  }

}
}
