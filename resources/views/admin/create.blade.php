@extends('layout')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card-header">
            <h3 class="card-title text-bold"> <i class="fas fa-edit text-dark mr-2"></i>Form Input User
            </h3>
        </div>
        
        <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show col-6" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
            
            <form action="{{ route('admin.store')}}" method="POST">
                @csrf
            
            <table class="table table-borderless">

                <tr>
                    <td><label class="offset-4">Nama</label> </td>
                    <td><input type="text" name="nama" class="form-control col-9">
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Username</label> </td>
                    <td><input type="text" name="username" class="form-control col-9">
                    </td>
                </tr>
                <tr>
                    <td><label class="offset-4">Jenis Kelamin</label> </td>
                    <td>{{ Form::select('jenis_kelamin',['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],null,['class'=>'form-control col-9','required'])}}
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Password</label> </td>
                    <td><input type="password" name="password" class="form-control col-9">
                    </td>
                </tr>
                

            </table>
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Input</button>
                <a href="{{ route('admin.index')}}" class="btn btn-default ">Cancel</a>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection
