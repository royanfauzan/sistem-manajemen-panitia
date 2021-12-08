@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col-12">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-3 col-sm-6 ms-auto pe-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-circle"></i> Tambah Kegiatan
                    </button>
                </div>
            </div>
            <div class="row pe-4 mt-3">
                <div class="col">
                    <h4 class="h4 fw-normal text-secondary"><b>List Kegiatan Kepanitiaan ( {{ $halaman }} )</b></h4>
                </div>
                <div class="col-md-3 ms-auto">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        @foreach ($kegiatans as $kegiatan)
                        <div class="col-md-4 mt-2">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                                    <p class="card-text">{{ $kegiatan->deskripsi_kegiatan }}</p>
                                    <p><small>Oleh : {{ $kegiatan->penyelenggara }}</small></p>
                                    <a href="#" class="btn btn-outline-warning text-white">Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/kegiatans" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="namaKegiatan" class="form-label @error('nama_kegiatan') is-invalid @enderror">Nama
                            Kegiatan</label>
                        <input type="text" class="form-control" id="namaKegiatan" name="nama_kegiatan">
                        @error('nama_kegiatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="penyelenggara"
                            class="form-label @error('penyelenggara') is-invalid @enderror">Penyelenggara</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                        @error('penyelenggara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_kegiatan"
                            class="form-label @error('deskripsi_kegiatan') is-invalid @enderror">Deskripsi_kegiatan</label>
                        <textarea type="text" class="form-control" id="deskripsi_kegiatan"
                            name="deskripsi_kegiatan"></textarea>
                    </div>
                    @error('deskripsi_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
        $('#exampleModal').modal('show');
    });
</script>
@endif
@endsection