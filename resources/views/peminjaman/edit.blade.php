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
                <h4 class="card-title text-light"> <i class="fas fa-edit text-light mr-2"></i>Form Input Peminjaman
                </h4>
            </div>
            <div class="card-body">
               
                <table class="table table-borderless">
                    {{ Form::model($peminjaman,['url'=>'peminjaman/'.$peminjaman->id,'method'=>'put'])}}
                    <form action="" method="PUT" class="form-horizontal">
                  
                        

                    <tr>
                        <td><label for="no_rm" class="offset-4">Nomor RM</label> </td>
                        <td>{{ Form::text('no_rm',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        
                    </tr>
                    <tr>
                        <td><label for="nama_pasien" class="offset-4">Nama Pasien</label> </td>
                        <td>{{ Form::text('nama_pasien',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="diagnosa" class="offset-4">Diagnosa</label> </td>
                        <td>{{ Form::text('diagnosa',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tindakan" class="offset-4">Tindakan</label> </td>
                        <td>{{ Form::text('tindakan',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_berobat" class="offset-4">Tanggal Berobat</label> </td>
                        <td>{{ Form::date('tanggal_berobat',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_dokter" class="offset-4">Nama Dokter</label> </td>
                        <td>{{ Form::text('nama_dokter',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_petugas" class="offset-4">Nama Petugas</label> </td>
                        <td>{{ Form::text('nama_petugas',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_pinjam" class="offset-4">Tangal Pinjam</label> </td>
                        <td>{{ Form::date('tanggal_pinjam',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                        </td>
                    </tr>
                    

                </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('peminjaman.index')}}" class="btn btn-default ">Cancel</a>
                </div>
                </form>
                {{ Form::close()}}
            </div>
        </div>
    </div>
</div>

@endsection