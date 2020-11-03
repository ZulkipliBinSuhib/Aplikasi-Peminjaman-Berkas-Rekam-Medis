<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $data['admin'] = DB::table('users')->get();

        return view('admin.index',$data);
    }

    public function create()
    {
        
        return view('admin.create');
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
            'username' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            
            
            
        ]);
        
        User::create([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tipe' => 'petugas',
            'password' => Hash::make($request['password'])
        ]);
        
        
        
        return redirect('admin')->with('status', 'Data added successfully, please add new data .');
    }

    public function edit($id)
    {
        $admin = DB::table('users')->where('id',$id)->first();
        $data['admin'] = $admin;
        return view('admin.edit',$data); 
    }

    public function show($id){
        //
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            
            
        ]);
        
       DB::table('users')->where('id',$id)->update([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tipe' => 'petugas',
            'password' => Hash::make($request['password'])
             ]);    
        
        
        return redirect('admin')->with('status', 'Data updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin')->with('status', 'Data deleted successfully .');
    }

}
