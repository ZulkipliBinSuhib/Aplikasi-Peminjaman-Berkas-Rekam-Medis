@extends('layout')
@section('content')


<section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card card-dark card-outline text-sm-3">

                <div class="card-header bg-info">
                    <h4 class="card-title text-light"> <i class="fas fa-list-alt text-light mr-2"></i>Daftar Peminjaman
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
                    <form action="{{ route('peminjaman.cetakSemua')}} " autocomplete="off" class="form-inline input-daterange">
                        
                        <div class="form-group mb-2">
                            <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date" >
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" >
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <div>
                            </div>
                            <button type="submit" name="cetakSemua" id="cetakSemua" class="btn btn-info ml-1"><i class="fa fa-print"></i> Cetak Laporan</a>
                        </div>
                    </form>
                    
                    <table class=" peminjaman table table-bordered table table-striped table-responsive" id="peminjaman">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Kode Rm</th>
                                <th>Nama Pasien</th>
                                <th>Diagnosa</th>
                                <th>Tindakan</th>
                                <th>Tanggal Berobat</th>
                                <th>Nama Dokter</th>
                                <th>Nama Petugas</th>
                                <th>Tanggal Pinjam</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach ($peminjaman as $row)
                            <tr class="text-center">
                                <td>{{ $no++}} </td>
                                <td>{{ $row->no_rm}}</td>
                                <td>{{ $row->nama_pasien}}</td>
                                <td>{{ $row->diagnosa}}</td>
                                <td>{{ $row->tindakan}}</td>
                                <td>{{ $row->tanggal_berobat}}</td>
                                <td>{{ $row->nama_dokter}}</td>
                                <td>{{ $row->nama_petugas}}</td>
                                <td>{{ $row->tanggal_pinjam}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('peminjaman.edit',$row->id) }}"
                                            class="btn btn-sm btn-warning fas fa-edit mr-2" title="Edit"></a>
                                        <form action="{{route('peminjaman.destroy',$row->id)}}" method="post"
                                            title="Hapus">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-danger btn-sm fas fa-trash-alt mr-2"
                                                data-id="{{$row->id}}" id="hapus"
                                                onclick="return confirm('Yakin Mau di Hapus ?')" type="submit"></button>
                                        </form>
                                        <a href="{{ route('peminjaman.cetak',$row->id) }}"
                                            class=" btn btn-primary btn-sm fas fa-print mr-2" title="Cetak"></a>
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
