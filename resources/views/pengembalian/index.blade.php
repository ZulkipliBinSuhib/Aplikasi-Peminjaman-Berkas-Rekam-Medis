@extends('layout')
@section('content')


<section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card card-dark card-outline text-sm-3">

                <div class="card-header bg-info">
                    <h4 class="card-title text-light"> <i class="fas fa-list-alt text-light mr-2"></i>Daftar Pengembalian
                    </h4>

                </div>

                <div class="card-body table-responsive">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    
                    <table class=" table table-bordered table table-striped table-responsive" id="pengembalian">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Kode Rm</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Nama Petugas</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach($pengembalian as $row)
                            <tr class="text-center">
                                <td>{{ $no++}} </td>
                                <td>{{ $row->no_rm}}</td>
                                <td>{{ $row->nama_pasien}}</td>
                                <td>{{ $row->tanggal_pinjam}}</td>
                                <td>{{ $row->tanggal_pengembalian}}</td>
                                <td>{{ $row->nama_petugas}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                       
                                        <form action="{{route('pengembalian.destroy',$row->id)}}" method="post"
                                            title="Hapus">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-danger btn-sm fas fa-trash-alt mr-2"
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
