<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="libraries/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">

    <style>
        .page_break {
            page-break-before: always;
        }
        .container {
        display: grid;
        grid-template-columns: 150px 150px 150px 150px;
        grid-template-rows: 150px;
        grid-gap: 0rem;
        }
        .item {
        border-radius: 5px;
        border: 1px solid #171717;
        }
    </style>
    <link rel="stylesheet" href="{{ ltrim(public_path('libraries/bootstrap-5.0.2-dist/css/bootstrap.css'), '/') }}" />


    <title>SIMP</title>
</head>

<body>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col p-0">
                {{-- KEPALA LAPORAN --}}
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Registrasi Akun</a>

                        <div class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <img class="img-center rounded me-2" src="http://127.0.0.1:8000/Looper.png"
                                    width="20" height="20">
                            </li>
                        </div>

                    </div>
                </nav>
                {{-- KEPALA LAPORAN END --}}
                {{-- Info Laporan --}}
                <div class="row m-3">
                    <div class="col-6">
                        <h4 class="mb-0">Konfirmasi Pendaftaran</h4>
                        <small></small>
                        <p>Tanggal Pendaftaran : {{ date('d/m/Y') }}</p>
                        <br>
                    </div>
                    <div class="col-6">
                        <p class="text-end mb-0">  </p>
                        <p class="text-end"></p>
                    </div>
                </div>
                {{-- Info Laporan End --}}
                {{-- Ringkasan Kegiatan --}}
                <div class="row mb-3">
                    <h5 class="text-center">Pembuatan Akun Berhasil</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-3 border-end text-center">
                        <p>Nim</p>
                        <h5>{{ $details['nim'] }}</h5>
                    </div>
                    <div class="col-3 border-end text-center">
                        <p>Username</p>
                        <h5>{{ $details['nama_user'] }}</h5>
                    </div>
                    <div class="col-3 border-end text-center">
                        <p>Email</p>
                        <h5>{{ $details['email'] }}</h5>
                    </div>
                    
                </div>
                <div class="row mb-3 mt-5">
                    <h5 class="text-center">Alert</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-3 text-center border-bottom">
                        <p>Apabila anda tidak merasa membuat akun tersebut, harap segera laporkan dengan membalas email ini</p>
                        {{-- <div class="progress p-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                20%
                            </div>
                        </div> --}}
                    </div>
                </div>

                {{-- LAMPIRAN_LAMPIRAN --}}
                <div class="page_break"></div>
                <hr>
                {{-- List Anggota --}}

                {{-- List Anggota End --}}
                <div class="page_break"></div>
                <hr>
                {{-- List Agenda --}}
                {{-- List Agenda End --}}

                <div class="page_break"></div>
                <hr>
                {{-- List Rekrutmen --}}
                {{-- List Rekrutmen End --}}

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script> --}}
    <script src="{{ ltrim(public_path('libraries/bootstrap-5.0.2-dist/js/bootstrap.js'), '/') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

</body>

</html>