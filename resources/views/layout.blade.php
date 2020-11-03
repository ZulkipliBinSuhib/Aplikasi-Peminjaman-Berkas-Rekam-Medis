<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Medcare Medical</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('layout/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <link rel="stylesheet" href="{{ asset('layout/vendors/fontawesome/css/all.min.css')}}">
    
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('layout/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('layout/css/responsive.css')}}">

</head>

<body>
   <!--================Header Menu Area =================-->
   
   <header class="header_area col">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left text-center col-12">
                    <span class="dn_btn"> Welcome {{ Auth::user()->nama }}</span>
                </div>
                <div class="float-right">
                   
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route ('home')}} "><img src="{{ asset('layout/img/avatar-01.png')}}" alt="" width="60px" height="60px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto ">
                            <li class="nav-item "><a class="nav-link" href=" {{ route('home') }}">Home</a></li> 
                            @if(Auth::user()->tipe == 'admin')
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Admin</a></li> 
                            @endif
                            @if(Auth::user()->tipe == 'petugas')
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Input</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('pasien.create')}}">Data Pasien</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman.create')}} ">Data Peminjaman</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('pengembalian.create') }}">Data Pengembalian</a></li> 

                                    
                                </ul>
                            </li>  
                            @endif 

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('pasien.index')}}">Data Pasien</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman.index')}} ">Data Peminjaman</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('pengembalian.index')}}">Data Pengembalian</a></li>
                                    
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"  onclick="return confirm('Apakah {{ Auth::user()->nama }} mau keluar ?')" type="submit">Logout</a></li>    
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="d-flex align-items-center">
    <!-- <section class="banner-area d-flex align-items-center"> -->

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-6">
                <h2>APLIKASI PEMINJAMAN BERKAS</h2>
                                <h3>PASIEN POLI GIGI PUSKESMAS CIMAHI SELATAN</h3>
                    
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->

    <!--================ Service section start =================-->  

    <div class=" area-padding-top">
        <div class="container">
            <div class="card">
                @yield('title')
                @yield('content')
                
            </div>
           
					<div class="text-center"><hr>
						<strong >By : PUTRIAYULESS RMIK <img src="{{ asset('FormLogin/images/copyright.png')}}" alt="" width="15px" height="20px">2020 </strong>
					</div>
        </div>
    </div>    
    
    <!--================ Service section end =================-->      

    <!--================Header Menu Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('layout/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('layout/js/popper.js')}}"></script>
    <script src="{{ asset('layout/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#peminjaman').DataTable({
                dom: 'Bfrtip',
                buttons: [

                ]
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#pasien').DataTable({
                dom: 'Bfrtip',
                buttons: [

                ]
            });
        });

    </script>



</body>



</html>
