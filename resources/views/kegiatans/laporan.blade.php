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
                <div class="row pencetak justify-content-center m-0 p-0">
                    <button id="btn-cetak" class="btn btn-primary" data-id="{{ $kegiatan->id }}">Cetak PDF</button>
                </div>
                {{-- KEPALA LAPORAN --}}
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">LAPORAN KEGIATAN</a>

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
                        <h4 class="mb-0">{{ $kegiatan->nama_kegiatan }}</h4>
                        <small>{{ $kegiatan->penyelenggara }}</small>
                        <p>Tanggal Cetak : {{ date('d/m/Y') }}</p>
                        <br>
                        <p class="mb-0">Lampiran :</p>
                        <ul>
                            <li>List Anggota</li>
                            <li>List Agenda</li>
                            <li>List Rekrutmen</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <p class="text-end mb-0"> {{ auth()->user()->nama_user }} </p>
                        <p class="text-end">{{ $roleuser }}</p>
                    </div>
                </div>
                {{-- Info Laporan End --}}
                {{-- Ringkasan Kegiatan --}}
                <div class="row mb-3">
                    <h5 class="text-center">Ringkasan Progres Kegiatan</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-3 border-end text-center">
                        <p>Jumlah Sie</p>
                        <h5>{{ $jmlsie }}</h5>
                    </div>
                    <div class="col-3 border-end text-center">
                        <p>Jumlah Anggota</p>
                        <h5>{{ $jmlanggota }}</h5>
                    </div>
                    <div class="col-3 border-end text-center">
                        <p>Jumlah Tugas</p>
                        <h5>{{ $jmlovrtgs }}</h5>
                    </div>
                    <div class="col-3 border-end text-center">
                        <p>Jumlah Tugas Selesai</p>
                        <h5> {{ $jmlovrtgslse }} </h5>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <h5 class="text-center">Overall Progress</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-3 text-center border-bottom">
                        <h5> {{ $persenovr }} %</h5>
                        {{-- <div class="progress p-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                20%
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <h5 class="text-center">List Tugas Selesai</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No Tugas</th>
                                    <th scope="col" class="text-center">Tugas</th>
                                    <th scope="col" class="text-center">Sie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatantgs->sies as $sie)                            
                                    @foreach ($sie->tugases as $htglese=>$tugas)
                                        @if (!strcmp($tugas->status_tugas,'selesai'))
                                            <tr>
                                                <td class="text-start teks-kecil">{{ ++$htglese }}</td>
                                                <td class="text-center teks-kecil">{{ $tugas->judul }}</td>
                                                <td class="text-center teks-kecil">{{ $sie->nama_sie }}</td>
                                            </tr> 
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <h5 class="text-center">List Tugas Belum Selesai</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-1">No</th>
                                    <th scope="col-6" class="text-center">Tugas</th>
                                    <th scope="col" class="text-center">Sie</th>
                                    <th scope="col" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatantgs->sies as $sie)                            
                                    @foreach ($sie->tugases as $hitung=>$tugas)
                                        @if (strcmp($tugas->status_tugas,'selesai'))
                                            <tr>
                                                <td class="text-start teks-kecil">{{ ++$hitung }}</td>
                                                <td class="text-center teks-kecil">{{ $tugas->judul }}</td>
                                                <td class="text-center teks-kecil">{{ $sie->nama_sie }}</td>
                                                <td class="text-center teks-kecil">{{ $tugas->status_tugas }}</td>
                                            </tr> 
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- LAMPIRAN_LAMPIRAN --}}
                <div class="page_break"></div>
                <hr>
                {{-- List Anggota --}}
                <div class="row mb-3 mt-5">
                    <h5>Lampiran : List Anggota</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-1" class="text-center">NIM</th>
                                    <th scope="col-6" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Sie</th>
                                    <th scope="col" class="text-center">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan->sies as $sie)
                                    @foreach ($sie->menjabats as $menjabat)
                                        @if (!strcmp($menjabat->status,'aktif'))
                                            <tr>
                                                <td class="text-center teks-kecil">{{ $menjabat->user->nim }}</td>
                                                <td class="text-center teks-kecil">{{ $menjabat->user->nama_user }}</td>
                                                <td class="text-center teks-kecil">{{ $sie->nama_sie }}</td>
                                                <td class="text-center teks-kecil">{{ $jabatans[$menjabat->jabatan_id-1]->nama_jabatan }}</td>
                                            </tr> 
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- List Anggota End --}}
                <div class="page_break"></div>
                <hr>
                {{-- List Agenda --}}
                <div class="row mb-3 mt-5">
                    <h5>Lampiran : List Agenda</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-1">No</th>
                                    <th scope="col-6" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Tanggal</th>
                                    <th scope="col" class="text-center">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agendas as $key=>$agenda)
                                    <tr>
                                        <td class="text-start teks-kecil">{{ ++$key }}</td>
                                        <td class="text-center teks-kecil">{{ $agenda->nama_agenda }}</td>
                                        <td class="text-center teks-kecil">{{ $agenda->tanggal_mulai }}</td>
                                        <td class="text-center teks-kecil">{{ $agenda->lokasi }}</td>
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- List Agenda End --}}

                <div class="page_break"></div>
                <hr>
                {{-- List Rekrutmen --}}
                <div class="row mb-3 mt-5">
                    <h5>Lampiran : List Rekrutmen</h5>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-1" class="text-center">NIM</th>
                                    <th scope="col-6" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Sie</th>
                                    <th scope="col" class="text-center">No Telp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan->sies as $sie)
                                    @foreach ($sie->menjabats as $menjabat)
                                        @if (!strcmp($menjabat->status,'menunggu'))
                                            <tr>
                                                <td class="text-center teks-kecil">{{ $menjabat->user->nim }}</td>
                                                <td class="text-center teks-kecil">{{ $menjabat->user->nama_user }}</td>
                                                <td class="text-center teks-kecil">{{ $sie->nama_sie }}</td>
                                                <td class="text-center teks-kecil">{{ $menjabat->user->no_telpon }}</td>
                                            </tr> 
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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

    <script>
        $(function(){
            $('.pencetak').on('click',function(){

                const id = $("#btn-cetak").data('id');
                const halaman = '/kegiatans/'+id;

                
                $('#btn-cetak').remove();
                print();
                location.href = halaman;
            });

        });
    </script>
</body>

</html>