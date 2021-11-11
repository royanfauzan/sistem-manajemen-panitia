@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Agenda Kegiatan</b></h4>
            </div>
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i> Tambah Kegiatan
                </button>
            </div>
        </div>
        <div class="row mt-3 me-5 p-4">
            <div class="col">
                <div class="row mt-3">
                    <div class="card">
                        <div class="card-body teks-kecil">
                            <h5 class="h5 fw-normal text-secondary"><b>Nama Agenda1</b></h5>
                            
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Deskripsi</label>
                                <div class="col-7">
                                    <textarea type="nim" name="nim" class="form-control-plaintext">: Deskripsi Agenda1</textarea>
                                </div>
                            </div>
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Dilaksanakan pada</label>
                                <div class="col-7">
                                    <input type="nim" name="nim" class="form-control-plaintext"
                                        value=": tanggal">
                                </div>
                            </div>    
    
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Lokasi</label>
                                <div class="col-7">
                                    <input type="nim" name="nim" class="form-control-plaintext" value=": tempat">
                                </div>
                            </div>
    
                            <div class="mb-3 ms-3 row justify-content-end">
                                <button type="button" class="col-lg-2 col-md-3 col-sm-4 btn btn-link me-2 teks-kecil"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal2">Ubah Detil</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card">
                        <div class="card-body teks-kecil">
                            <h5 class="h5 fw-normal text-secondary"><b>Nama Agenda2</b></h5>
                            
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Deskripsi</label>
                                <div class="col-7">
                                    <textarea type="nim" name="nim" class="form-control-plaintext">: Deskripsi Agenda2</textarea>
                                </div>
                            </div>
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Dilaksanakan pada</label>
                                <div class="col-7">
                                    <input type="nim" name="nim" class="form-control-plaintext"
                                        value=": tanggal">
                                </div>
                            </div>   
    
                            <div class="mb-3 ms-3 row">
                                <label for="inputNim" class="col-4 col-form-label">Lokasi</label>
                                <div class="col-7">
                                    <input type="nim" name="nim" class="form-control-plaintext" value=": tempat">
                                </div>
                            </div>
    
                            <div class="mb-3 ms-3 row justify-content-end">
                                <button type="button" class="col-lg-2 col-md-3 col-sm-4 btn btn-link me-2 teks-kecil"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal2">Ubah Detil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Agenda</h5>

            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="mb-3">
                        <label for="namaKegiatan" class="form-label @error('nama_kegiatan') is-invalid @enderror">Nama
                            Agenda</label>
                        <input type="text" class="form-control" id="namaKegiatan" name="nama_kegiatan">
                        @error('nama_kegiatan')
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyelenggara"
                                    class="form-label @error('penyelenggara') is-invalid @enderror">Tanggal Mulai</label>
                                <input type="datetime-local" class="form-control" id="penyelenggara" name="penyelenggara">
                                @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyelenggara"
                                    class="form-label @error('penyelenggara') is-invalid @enderror">Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" id="penyelenggara" name="penyelenggara">
                                @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="penyelenggara"
                            class="form-label @error('penyelenggara') is-invalid @enderror">Lokasi</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                        @error('penyelenggara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

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

<!-- Modal Edit -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Agenda</h5>

            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="mb-3">
                        <label for="namaKegiatan" class="form-label @error('nama_kegiatan') is-invalid @enderror">Nama
                            Agenda</label>
                        <input type="text" class="form-control" id="namaKegiatan" name="nama_kegiatan">
                        @error('nama_kegiatan')
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyelenggara"
                                    class="form-label @error('penyelenggara') is-invalid @enderror">Tanggal Mulai</label>
                                <input type="datetime-local" class="form-control" id="penyelenggara" name="penyelenggara">
                                @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyelenggara"
                                    class="form-label @error('penyelenggara') is-invalid @enderror">Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" id="penyelenggara" name="penyelenggara">
                                @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="penyelenggara"
                            class="form-label @error('penyelenggara') is-invalid @enderror">Lokasi</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                        @error('penyelenggara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-primary rounded-pill">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
        $('#exampleModal').modal('show');
    });
</script>
@endif

@endsection