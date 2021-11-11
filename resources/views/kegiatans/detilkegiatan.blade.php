@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col-lg-8">
        <div class="row mb-2">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <span><b>Detil Kegiatan</b></span>
                    </div>
                    <div class="card-body teks-kecil">
                        <div class="mb-3 ms-3 row">
                            <label for="inputNim" class="col-4 col-form-label">Kegiatan</label>
                            <div class="col-7">
                                <input type="nim" name="nim" class="form-control-plaintext" value=": Nama Kegiatan">
                            </div>
                        </div>

                        <div class="mb-3 ms-3 row">
                            <label for="inputNim" class="col-4 col-form-label">Penyelenggara</label>
                            <div class="col-7">
                                <input type="nim" name="nim" class="form-control-plaintext"
                                    value=": Nama Penyelenggara">
                            </div>
                        </div>

                        <div class="mb-3 ms-3 row">
                            <label for="inputNim" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-7">
                                <textarea type="nim" name="nim" class="form-control-plaintext">: Deskripsi SIE</textarea>
                            </div>
                        </div>

                        <div class="mb-3 ms-3 row">
                            <label for="inputNim" class="col-4 col-form-label">File Ijin</label>
                            <div class="col-7">
                                <input type="nim" name="nim" class="form-control-plaintext" value=": file.docx">
                            </div>
                        </div>

                        <div class="mb-3 ms-3 row justify-content-end">
                            <button type="button" class="col-lg-2 col-md-3 col-sm-4 btn btn-link me-2 teks-kecil"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah Detil</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-2">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning text-white d-flex justify-content-between">
                        <span><b>Agenda Kegiatan</b></span>
                        <button type="button" class="btn btn-outline-light ms-auto me-2 teks-kecil"> <b><i class="bi bi-gear"></i> Kelola</b></button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5"><b>Agenda</b></div>
                            <div class="col-4 text-center"><b>Tanggal</b></div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-5 ps-4">Kegiatan 1</div>
                            <div class="col-4 text-center">Tanggal 1</div>
                            <div class="col-2 text-center">detil</div>
                        </div>                        
                        <div class="row teks-kecil">
                            <div class="col-5 ps-4">Kegiatan 2</div>
                            <div class="col-4 text-center">Tanggal 2</div>
                            <div class="col-2 text-center">detil</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-2">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <span><b>Tugas-Tugas</b></span>
                        <button type="button" class="btn btn-outline-light ms-auto me-2 teks-kecil"> <b><i class="bi bi-gear"></i> Kelola</b></button>
                    </div>
                    <div class="card-body">
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
        <div class="row mt-4 mb-2">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <span><b>Progres Pengerjaan</b></span>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col"><b>SIE 1</b></div>                            
                        </div>
                        <div class="row ms-2">
                            <div class="progress p-0">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    10%
                                </div>
                            </div>
                        </div>  
                        <div class="row mt-2">
                            <div class="col"><b>SIE 2</b></div>                            
                        </div>
                        <div class="row ms-2">
                            <div class="progress p-0">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    90%
                                </div>
                            </div>
                        </div>   
                        <div class="mb-3 ms-3 mt-4 row justify-content-end">
                            <button type="button" class="col-lg-3 col-md-4 col-sm-6 btn btn-primary me-2 teks-kecil"> Cetak progress</button>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-danger text-white d-flex justify-content-between">
                        <span><b>Struktur</b></span>
                        <button type="button" class="btn btn-outline-light ms-auto me-2 teks-kecil"> <b><i class="bi bi-gear"></i> Kelola</b></button>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col"><b>SIE 1</b></div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-7 ps-4">Anggota 1</div>
                            <div class="col-5 text-center">Jabatan</div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-7 ps-4">Anggota 2</div>
                            <div class="col-5 text-center">Jabatan</div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-7 ps-4">Anggota 3</div>
                            <div class="col-5 text-center">Jabatan</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col"><b>SIE 2</b></div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-7 ps-4">Anggota 1</div>
                            <div class="col-5 text-center">Jabatan</div>
                        </div>
                        <div class="row teks-kecil">
                            <div class="col-7 ps-4">Anggota 2</div>
                            <div class="col-5 text-center">Jabatan</div>
                        </div>                        
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
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Ubah Detil Kegiatan</h5>

            </div>
            <form action="#" method="POST">
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
                    <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
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