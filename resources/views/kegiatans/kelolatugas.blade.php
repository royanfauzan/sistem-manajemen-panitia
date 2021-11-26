@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>List Tugas</b></h4>
            </div>
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i> Tambah Tugas
                </button>
            </div>
        </div>
        <div class="row mt-2 me-5 p-4">
            <div class="col">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row mt-2">
                            <div class="col-5"><b>SIE 1</b></div>
                            <div class="col-4 text-center"><b>Status</b></div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-5 ps-4">Tugas 1</div>
                            <div class="col-4 text-center">Status Tugas 1</div>
                            <div class="col-2 text-center">detil</div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-5 ps-4">Tugas 2</div>
                            <div class="col-4 text-center">Status Tugas 2</div>
                            <div class="col-2 text-center">detil</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-5"><b>SIE 2</b></div>
                            <div class="col-4 text-center"><b>Status</b></div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-5 ps-4">Tugas 1</div>
                            <div class="col-4 text-center">Status Tugas 1</div>
                            <div class="col-2 text-center">detil</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Tugas Menunggu Konfirmasi</b></h4>
            </div>            
        </div>
        <div class="row mt-2 me-5 p-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-5"><b>SIE 1</b></div>
                            <div class="col-2 text-center"><b>Status</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-5 ps-4">Tugas 1</div>
                            <div class="col-2 text-center">Status Tugas 1</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Konfirmasi</button>
                                </div>
                            </div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-5 ps-4">Tugas 1</div>
                            <div class="col-2 text-center">Status Tugas 1</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Konfirmasi</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-5"><b>SIE 2</b></div>
                            <div class="col-4 text-center"><b></b></div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row teks-kecil mt-1">
                            <div class="col-5 ps-4">Tugas 1</div>
                            <div class="col-2 text-center">Status Tugas 1</div>
                            <div class="col-3 text-center">
                                <div class="row">
                                    <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                    <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil">Konfirmasi</button>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Tugas -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Tugas</h5>

            </div>
            <form action="/listtugas" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sie_id"
                                    class="form-label @error('sie_id') is-invalid @enderror">Tugas Sie</label>
                                <select class="form-select" name="sie_id">
                                    <option selected value="null">Pilih Sie</option>
                                    <option value="1">Sie 1</option>
                                    <option value="2">Sie 2</option>
                                    <option value="3">Sie 3</option>
                                </select>
                                @error('sie_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label @error('judul') is-invalid @enderror">Judul Tugas</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi"
                            class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi tugas</label>
                        <textarea type="text" class="form-control" id="deskripsi"
                            name="deskripsi"></textarea>
                    </div>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="catatan"
                            class="form-label @error('catatan') is-invalid @enderror">Catatan</label>
                        <input type="text" class="form-control" id="catatan" name="catatan">
                        @error('catatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Tambah Tugas</button>
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