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
                    <form action="{{ route('pengembalian.store')}}" method="POST">
                        @csrf

                  
                    <tr>
                        <td><label for="nama_pasien" class="offset-4">Nama Pasien</label> </td>
                        <td><select name="nama_pasien" id="nama_pasien" class="form-control col-9">
                            <option disabled selected>Nama Pasien</option>
                            @foreach(App\Pasien::all() as $row)
                            <option value="{{$row->id}}">{{$row->nama_pasien}}</option>
                            @endforeach
                        </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="no_rm" class="offset-4">Nomor RM</label> </td>
                        <td> <input type="text" name="no_rm" class="form-control col-9" id="no_rm" readonly>
                    </tr>
                    <tr>
                        <td><label for="tanggal_pengembalian" class="offset-4">Tanggal Pengembalian</label> </td>
                        <td><input type="date" name="tanggal_pengembalian" class="form-control col-9" id="tanggal_pengembalian" >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama_petugas" class="offset-4">Nama Petugas</label> </td>
                        <td><input type="text" name="nama_petugas" class="form-control col-9">
                        </td>
                    </tr>
                </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('pengembalian.index')}}" class="btn btn-default ">Cancel</a>
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
                    url: "{{ route('pengembalian.ajax_create') }}",
                    dataType: "JSON",
                    data: {
                        get: get
                    },
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        var json = data.data;
                        var no_rm = json.no_rm;

                        console.log(no_rm);

                        $('#no_rm').val(no_rm);

                    }
                });
                return false;
            });
        });

    </script>


@endsection