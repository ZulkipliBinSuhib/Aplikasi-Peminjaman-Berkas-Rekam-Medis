@extends('layout')
@section('content')


<section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline text-sm-3">

                <div class="card-header ">
                    <h3 class="card-title text-bold"> <i class="fas fa-list-alt text-dark mr-2"></i>Daftar Users
                    </h3>

                </div>
                <div class="card-body table-responsive">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show col-5" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <a href="{{route ('admin.create')}} ">+ Tambah Data</a>
                    <table class="sebaran table table-bordered table table-striped table-responsive" id="sebaran">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Jenis Kelamin</th>
                                <th>Tipe</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach ($admin as $row)
                            <tr class="text-center">
                                <td>{{ $no++}} </td>
                                <td>{{ $row->nama}}</td>
                                <td>{{ $row->username}}</td>
                                <td>{{ $row->jenis_kelamin}}</td>
                                <td>{{ $row->tipe}}</td>

                                <!-- <td>{{ $row->nama}}</td> -->
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('admin.edit',$row->id) }}"
                                            class="btn btn-sm btn-warning fas fa-edit mr-2" title="Edit"></a>
                                        <form action="{{route('admin.destroy',$row->id)}}" method="post" title="Hapus">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-danger btn-sm fas fa-trash-alt"
                                                data-id="{{$row->id}}" id="hapus"
                                                onclick="return confirm('Yakin Mau di Hapus ?')" type="submit"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
