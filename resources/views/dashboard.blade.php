@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col-12 p-0">
        <h4 class="h4 fw-normal text-secondary text-wrap"><b>Kegiatan Kepanitiaan yang Diikuti</b></h4>
        <div class="row me-0">
            <div class="col-10 glide" >
                <div class="container-sm glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        @if (!$kegiatans->isEmpty())                            
                            @foreach ($kegiatans as $kegiatan)
                            <div class="card text-white bg-danger glide__slide h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                                    <p class="card-text">{{ $kegiatan->deskripsi_kegiatan }}</p>
                                    <p><small>Oleh : {{ $kegiatan->penyelenggara }}</small></p>
                                    <a href="/kegiatans/{{ $kegiatan->id }}" class="btn btn-primary">Kelola</a>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="card bg-white glide__slide h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tidak Ada Kegiatan Diikuti</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--right btn btn-outline-dark rounded"
                        data-glide-dir=">"> <i class="bi bi-caret-right"></i> </button>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="row mt-5">
    <div class="col p-0">
        <div class="container pe-4">

            <h4 class="h4 fw-normal text-secondary"><b>List Tugas</b></h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" class="text-center">Tugas</th>
                        <th scope="col" class="text-center">Sie</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugases as $key=>$tugas)
                        <tr>
                            <td class="text-start teks-kecil">{{ ++$key }}</td>
                            <td class="text-center teks-kecil">{{ $tugas->judul }}</td>
                            <td class="text-center teks-kecil">{{ $tugas->sie->nama_sie }}</td>
                            <td class="text-center teks-kecil"><a href="/tugas/{{ $tugas->sie->id }}">Cek Tugas</a></td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="libraries/glide-3.4.1/glide.js"></script>
<script>
    new Glide('.glide',{
        startAt: 0,
        perView: 2.5,
        breakpoints: {
            560: {
            perView: 1
            }
        }
    }).mount()
</script>

@endsection