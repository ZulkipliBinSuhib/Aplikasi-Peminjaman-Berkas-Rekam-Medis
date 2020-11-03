@extends('layout')
@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show col-4" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline text-sm-3">
            <div class="card-header bg-info">
                <h4 class="card-title text-light"> <i class="fas fa-edit text-light mr-2"></i>Form Input Pasien
                </h4>
            </div>
            <div class="card-body">
               
                <table class="table table-borderless">
                    <form action="{{ route('pasien.store')}}" method="POST">
                        @csrf

                    <tr>
                        <td><label for="no_rm" class="offset-4">Nomor RM</label> </td>
                        <td><input type="text" class="form-control col-9" name="no_rm">
                        
                    </tr>
                    <tr>
                        <td><label for="nama_pasien" class="offset-4">Nama Pasien</label> </td>
                        <td><input type="text" name="nama_pasien" class="form-control col-9">
                        </td>
                    </tr><tr>
                        <td><label for="jenis_kelamin" class="offset-4">Jenis Kelamin</label> </td>
                        <td>{{ Form::select('jenis_kelamin',['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],null,['class'=>'form-control col-9','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_lahir" class="offset-4">Tangal Lahir</label> </td>
                        <td><input type="date" class="form-control col-9" name="tanggal_lahir">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="usia" class="offset-4">Usia</label> </td>
                        <td><input type="number" class="form-control col-9" name="usia">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="alamat" class="offset-4">Alamat</label> </td>
                        <td><input type="text" name="alamat" class="form-control col-9">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="diagnosa" class="offset-4">Diagnosa</label> </td>
                        <td><input type="text" name="diagnosa" class="form-control col-9">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tindakan" class="offset-4">Tindakan</label> </td>
                        <td><input type="text" name="tindakan" class="form-control col-9">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_berobat" class="offset-4">Tangal Berobat</label> </td>
                        <td><input type="date" name="tanggal_berobat" class="form-control col-9">
                        </td>
                    </tr>
                    

                </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('pasien.index')}}" class="btn btn-default ">Cancel</a>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection
