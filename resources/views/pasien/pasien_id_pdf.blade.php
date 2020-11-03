<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style type="text/css">
    hr.style{
    overflow: visible; /* For IE */
    width: 620px;
    margin-top: 0px ;
    border: none;
    border-top: medium double #333;
    color: #333;
    text-align: center;
}
hr.style2{
    overflow: visible; /* For IE */
    width: 130px;
    margin-top: 0px ;
    border: none;
    color: #333;
    border-top: medium double #333;
    text-align: center;
}

</style>  
</head>
  <body>
  <table align="center">
        <tr>
            <td align="center">
                <font size="4">PUSKESMAS CIMAHI UTARA</font><br>
                <small> Jln.Jati Serut No.16 Kec.Cimahi Utara, Kota Cimahi, Jawa Barat 40767</small><br>
                <strong> LAPORAN DATA PASIEN POLI GIGI  </strong>
            </td>
        </tr>
    </table><br>
        <table align="center">
        <tr>
            <td ><hr class="style"></td>
        </tr>
        </table>
       
    </table>
   
    <br>
    
    <table align="center">
        <tr>
            <td>
                <font size="2">Nomor Rekam Medis
            </td>
            <td width="350px"> : {{$pasien->no_rm}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Nama Pasien
            </td>
            <td width="350px"> : {{$pasien->nama_pasien}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Jenis Kelamin
            </td>
            <td width="350px"> : {{$pasien->jenis_kelamin}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Tanggal Lahir
            </td>
            <td width="350px"> : {{$pasien->tanggal_lahir}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Usia
            </td>
            <td width="350px"> : {{$pasien->usia}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Alamat
            </td>
            <td width="350px"> : {{$pasien->alamat}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Diagnosa
            </td>
            <td width="350px"> : {{$pasien->diagnosa}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Tindakan
            </td>
            <td width="350px"> : {{$pasien->tindakan}}</td>
        </tr>
        <tr>
            <td>
                <font size="2">Tanggal Berobat
            </td>
            <td width="350px"> : {{$pasien->tanggal_berobat}}</td>
        </tr>
        

    </table>
   
       
   
   
    
    
</body>
</html>