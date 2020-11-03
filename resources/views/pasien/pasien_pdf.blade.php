<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <style type="text/css">
        hr.style {
            overflow: visible;
            /* For IE */
            width: 620px;
            margin-top: 0px;
            border: none;
            border-top: medium double #333;
            color: #333;
            text-align: center;
        }

        hr.style2 {
            overflow: visible;
            /* For IE */
            width: 130px;
            margin-top: 0px;
            border: none;
            color: #333;
            border-top: medium double #333;
            text-align: center;
        }

    </style>
</head>

<body>
    <br>
    <table class="col-12">
        <tr>
            <td align="center">
                <font size="4">PUSKESMAS CIMAHI UTARA</font><br>
                <small> Jln.Jati Serut No.16 Kec.Cimahi Utara, Kota Cimahi, Jawa Barat 40767</small><br>
                <strong> LAPORAN DATA PASIEN BEROBAT DI POLI GIGI <br>
                    Per Tanggal  {{$from_date}}  s/d  {{$to_date }}
                </strong>
            </td>
        </tr>
    </table><br>
    <table align="center">
        <tr>
            <td>
                <hr class="style">
            </td>
        </tr>
    </table>


    <br>
    <table class=" table table-bordered col-2" id="" align="center">
        <thead>
            <tr class="text-center">
                <th> No</th>
                <th>Kode Rm</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Tanggal Berobat</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1;?>
            @foreach ($pasien as $row)
            <tr class="text-center">
                <td>{{ $no++}} </td>
                <td>{{ $row->no_rm}}</td>
                <td>{{ $row->nama_pasien}}</td>
                <td>{{ $row->jenis_kelamin}}</td>
                <td>{{ $row->tanggal_lahir}}</td>
                <td>{{ $row->usia}}</td>
                <td>{{ $row->alamat}}</td>
                <td>{{ $row->diagnosa}}</td>
                <td>{{ $row->tindakan}}</td>
                <td>{{ $row->tanggal_berobat}}</td>
                @endforeach
        </tbody>
    </table>
    

</body>

</html>
