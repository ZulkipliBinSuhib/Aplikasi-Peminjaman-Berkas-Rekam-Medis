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
                    <form action="{{ route('peminjaman.store')}}" method="POST">
                        @csrf

                  
                    <tr>
                        <td><label for="nama_pasien" class="offset-4">Nama Pasien</label> </td>
                        <td><select name="nama_pasien" id="nama_pasien" class="form-control col-9">
                            <option disabled selected>Nama Pasien</option>
                            @foreach($get_nama as $row)
                            <option value="{{$row}}">{{$row}}</option>
                            @endforeach
                        </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="no_rm" class="offset-4">Nomor RM</label> </td>
                        <td> <input type="text" name="no_rm" class="form-control col-9" id="no_rm" readonly>
                            
                        
                        
                    </tr>
                    <tr>
                        <td><label for="diagnosa" class="offset-4">Diagnosa</label> </td>
                        <td><input type="text" name="diagnosa" class="form-control col-9" id="diagnosa" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tindakan" class="offset-4">Tindakan</label> </td>
                        <td><input type="text" name="tindakan" class="form-control col-9" id="tindakan" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_berobat" class="offset-4">Tanggal Berobat</label> </td>
                        <td><input type="date" name="tanggal_berobat" class="form-control col-9" id="tanggal_berobat" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_dokter" class="offset-4">Nama Dokter</label> </td>
                        <td><input type="text" name="nama_dokter" class="form-control col-9">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_petugas" class="offset-4">Nama Petugas</label> </td>
                        <td><input type="text" name="nama_petugas" class="form-control col-9">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_pinjam" class="offset-4">Tangal Pinjam</label> </td>
                        <td><input type="date" name="tanggal_pinjam" class="form-control col-9">
                        </td>
                    </tr>
                    

                </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('peminjaman.index')}}" class="btn btn-default ">Cancel</a>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

 <!-- AJAX Peminjaman -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function () {
            console.log($('#nama_pasien'))
            $('#nama_pasien').on('input', function () {
                var get = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('peminjaman.ajax_create') }}",
                    dataType: "JSON",
                    data: {
                        get: get
                    },
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        var json = data;
                        var no_rm = json.no_rm;
                        var diagnosa = json.diagnosa;
                        var tindakan = json.tindakan;
                        var tanggal_berobat = json.tanggal_berobat;
                        console.log(no_rm);
                        console.log(diagnosa);
                        console.log(tindakan);
                        console.log(tanggal_berobat);
                        $('#no_rm').val(no_rm);
                        $('#diagnosa').val(diagnosa);
                        $('#tindakan').val(tindakan);
                        $('#tanggal_berobat').val(tanggal_berobat);

                    }
                });
                return false;
            });
        });

    </script>


@endsection