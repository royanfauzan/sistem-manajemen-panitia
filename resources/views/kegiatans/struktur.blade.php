@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>List Sie</b></h4>
            </div>
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i> Tambah Sie
                </button>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-10">
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3 ph-3">
                        <div class="card text-center rounded">
                            <div class="card-body">
                                <p class="h5 card-title mb-2"><b>Nama SIE 1</b></p>
                                <p class="text-secondary"><small>Kegiatan</small></p>
                                <p class="mt-3 text-start">Deskripsi</p>
                                <p class="p-0 mb-0"><small><a href="#">Detail</a></small></p>
                                <button type="button" class="btn btn-primary rounded rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Mendaftar</button>
                            </div>
                        </div>
                    </div>     
                    <div class="col-md-3 ph-3">
                        <div class="card text-center rounded">
                            <div class="card-body">
                                <p class="h5 card-title mb-2"><b>Nama SIE 2</b></p>
                                <p class="text-secondary"><small>Kegiatan</small></p>
                                <p class="mt-3 text-start">Deskripsi</p>
                                <p class="p-0 mb-0"><small><a href="#">Detail</a></small></p>
                                <button type="button" class="btn btn-primary rounded rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Mendaftar</button>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3 ph-3">
                        <div class="card text-center rounded">
                            <div class="card-body">
                                <p class="h5 card-title mb-2"><b>Nama SIE 3</b></p>
                                <p class="text-secondary"><small>Kegiatan</small></p>
                                <p class="mt-3 text-start">Deskripsi</p>
                                <p class="p-0 mb-0"><small><a href="#">Detail</a></small></p>
                                <button type="button" class="btn btn-primary rounded rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Mendaftar</button>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>

        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Pendaftaran Rekrutmen</b></h4>
            </div>            
        </div>
        <div class="row mt-2 me-5 p-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-3"><b>SIE 1</b></div>
                            <div class="col-2 text-center"><b>NIM</b></div>
                            <div class="col-2 text-center"><b>No HP</b></div>
                            <div class="col-2 text-center"><b>Email</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Sie</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Terima</button>
                                </div>
                            </div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Sie</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Terima</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pe-4 mt-5">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Anggota Kepanitiaan</b></h4>
            </div>   
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i> Tambah Anggota
                </button>
            </div>
        </div>
        <div class="row mt-1 me-5 p-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-3"><b>Inti</b></div>
                            <div class="col-2 text-center"><b>NIM</b></div>
                            <div class="col-2 text-center"><b>No HP</b></div>
                            <div class="col-2 text-center"><b>Email</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3"><b>SIE 1</b></div>
                            <div class="col-2 text-center"><b>NIM</b></div>
                            <div class="col-2 text-center"><b>No HP</b></div>
                            <div class="col-2 text-center"><b>Email</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3"><b>SIE 1</b></div>
                            <div class="col-2 text-center"><b>NIM</b></div>
                            <div class="col-2 text-center"><b>No HP</b></div>
                            <div class="col-2 text-center"><b>Email</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4">Nama Anggota</div>
                            <div class="col-2 text-center">1029273645</div>
                            <div class="col-2 text-center">081234567</div>
                            <div class="col-2 text-center">royan@mail.com</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Ubah</button>
                                </div>
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