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
            <div class="card-header">
                <h3 class="card-title text-bold"> <i class="fas fa-edit text-dark mr-2"></i>Form Input Peminjaman
                </h3>
            </div>
            <div class="card-body">
               
                <table class="table table-borderless">
                    {{ Form::model($admin,['url'=>'admin/'.$admin->id,'method'=>'put'])}}
                    <form action=""  class="form-horizontal">
                  
                        

                    <tr>
                    <td><label class="offset-4">Nama</label> </td>
                    <td>{{ Form::text('nama',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Username</label> </td>
                    <td>{{ Form::text('username',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                    </td>
                </tr>
                <tr>
                    <td><label class="offset-4">Jenis Kelamin</label> </td>
                    <td>{{ Form::select('jenis_kelamin',['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],null,['class'=>'form-control col-9','required'])}}
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Password</label> </td>
                    <td>{{ Form::password('password',null,['placeholder'=>'','class'=>'form-control col-9 ','required'])}}
                    </td>
                </tr>
                

                </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('admin.index')}}" class="btn btn-default ">Cancel</a>
                </div>
                </form>
                {{ Form::close()}}
            </div>
        </div>
    </div>
</div>

@endsection