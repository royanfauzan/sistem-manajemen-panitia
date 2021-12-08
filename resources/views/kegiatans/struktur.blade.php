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
                    @foreach ($kegiatan->sies as $sie)
                        <div class="col-md-3 ph-3">
                            <div class="card text-center rounded">
                                <div class="card-body">
                                    <p class="h5 card-title mb-2"><b>{{ $sie->nama_sie }}</b></p>
                                    <p class="text-secondary"><small> {{ $kegiatan->nama_kegiatan }} </small></p>
                                    <p class="mt-3 text-start">{{ $sie->deskripsi_sie }}</p>
                                    <p class="p-0 mb-0"><small><a href="#"></a></small></p>
                                    <button type="button" class="btn btn-primary rounded rounded-pill sie-edt"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal4"
                                        data-id="{{ $sie->id}}"
                                        data-nama="{{ $sie->nama_sie }}"
                                        data-deskripsi="{{ $sie->deskripsi_sie }}">Edit</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
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
                        @foreach ($rekrutmens as $sie)
                        @if ($loop->first) @continue @endif
                        <div class="row mt-2">
                            <div class="col-3"><b>{{ $sie->nama_sie }}</b></div>
                            <div class="col-2 text-center"><b>NIM</b></div>
                            <div class="col-2 text-center"><b>No HP</b></div>
                            <div class="col-2 text-center"><b>Email</b></div>
                            <div class="col-3 text-center"><b>Aksi</b></div>
                        </div>                            
                        @foreach ($sie->menjabats as $menjabat)
                        <div class="row teks-kecil mt-1">
                            <div class="col-3 ps-4 ">{{ $menjabat->user->nama_user }}</div>
                            <div class="col-2 text-center ">{{ $menjabat->user->nim }}</div>
                            <div class="col-2 text-center ">{{ $menjabat->user->no_telpon }}</div>
                            <div class="col-2 text-center ">{{ $menjabat->user->email }}</div>
                            <div class="col-3 text-center ">
                                <div class="row">
                                    <button type="button"
                                        class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                        <button type="submit"
                                        class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil rekrut-edt" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal5"
                                        data-id="{{ $menjabat->id}}"
                                        data-nama="{{ $menjabat->user->nama_user }}"
                                        data-nim="{{ $menjabat->user->nim }}"
                                        data-sie="{{ $menjabat->sie_id }}"
                                        data-jabatan="{{ $menjabat->jabatan_id }}">Kelola</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row pe-4 mt-5">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Anggota Kepanitiaan</b></h4>
            </div>
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-info text-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">
                    <i class="bi bi-plus-circle"></i> Tambah Anggota
                </button>
            </div>
        </div>
        <div class="row mt-1 me-5 p-4">
            <div class="col">
                <div class="row">
                    @if (session()->has('tambahError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('tambahError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif                    
                    <div class="col">
                        @foreach ($kegiatan->sies as $sie)
                            <div class="row mt-2">
                                <div class="col-3"><b>{{ $sie->nama_sie }}</b></div>
                                <div class="col-2 text-center"><b>NIM</b></div>
                                <div class="col-2 text-center"><b>No HP</b></div>
                                <div class="col-2 text-center"><b>Email</b></div>
                                <div class="col-3 text-center"><b>Aksi</b></div>
                            </div>                            
                            @foreach ($sie->menjabats as $menjabat)
                            @if (!strcmp($menjabat->status,'aktif'))                                
                                <div class="row teks-kecil mt-1">
                                    <div class="col-3 ps-4 ">{{ $menjabat->user->nama_user }}</div>
                                    <div class="col-2 text-center ">{{ $menjabat->user->nim }}</div>
                                    <div class="col-2 text-center ">{{ $menjabat->user->no_telpon }}</div>
                                    <div class="col-2 text-center ">{{ $menjabat->user->email }}</div>
                                    <div class="col-3 text-center ">
                                        <div class="row">
                                            <button type="button"
                                                class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                            <button type="submit"
                                                class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil anggota-edt" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal3"
                                                data-id="{{ $menjabat->id}}"
                                                data-nama="{{ $menjabat->user->nama_user }}"
                                                data-nim="{{ $menjabat->user->nim }}"
                                                data-sie="{{ $menjabat->sie_id }}"
                                                data-jabatan="{{ $menjabat->jabatan_id }}">Ubah</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Sie -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Sie</h5>
            </div>
            <form action="/liststruktur" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <input type="hidden" id="kegiatan_id" name="kegiatan_id" value="{{ $kegiatan->id }}">
                    <p class="text-center text-secondary"><i>Isi Detail SIE</i></p>
                    <div class="mb-3">
                        <label for="namasie" class="form-label @error('nama_sie') is-invalid @enderror">Nama
                            Sie</label>
                        <input type="text" class="form-control" id="namasie" name="nama_sie">
                        @error('nama_sie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_sie"
                            class="form-label @error('deskripsi_sie') is-invalid @enderror">Deskripsi_sie</label>
                        <textarea type="text" class="form-control" id="deskripsi_sie" name="deskripsi_sie"></textarea>
                    </div>
                    @error('deskripsi_sie')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" id="rekrutmen" name="rekrutmen" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Open Rekrutmen</label>
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

<!-- Modal Edit Sie -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Sie</h5>
            </div>
            <form action="/liststruktur" method="POST" id="formedtsie">
                @method('patch');
                @csrf
                <div class="modal-body teks-kecil">
                    <input type="hidden" id="id_sie_edt" name="id">
                    <p class="text-center text-secondary"><i>Isi Detail SIE</i></p>
                    <div class="mb-3">
                        <label for="namasie_edt" class="form-label @error('nama_sie') is-invalid @enderror">Nama
                            Sie</label>
                        <input type="text" class="form-control" id="namasie_edt" name="nama_sie">
                        @error('nama_sie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_sie_edt"
                            class="form-label @error('deskripsi_sie') is-invalid @enderror">Deskripsi_sie</label>
                        <textarea type="text" class="form-control" id="deskripsi_sie_edt" name="deskripsi_sie"></textarea>
                    </div>
                    @error('deskripsi_sie')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="rekrutmen_edt" name="rekrutmen">
                        <label class="form-check-label" for="rekrutmen_edt">Open Rekrutmen</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Simpan Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Anggota -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Anggota</h5>
            </div>
            <form action="/listmenjabat" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="mb-3">
                        <label for="nim" class="form-label @error('nim') is-invalid @enderror">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                        @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sie_id"
                                    class="form-label @error('sie_id') is-invalid @enderror">Sie</label>
                                <select class="form-select" name="sie_id">
                                    <option selected value="" >Pilih Sie</option>
                                    @foreach ($sies as $sie)                                        
                                        <option value="{{ $sie->id }}">{{ $sie->nama_sie }}</option>
                                    @endforeach
                                </select>
                                @error('sie_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jabatan_id"
                                    class="form-label @error('jabatan_id') is-invalid @enderror">Jabatan</label>
                                <select class="form-select" name="jabatan_id">
                                    <option selected value="" >Pilih Jabatan</option>
                                    @foreach ($jabatans as $jabatan)                                        
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Tambah Panitia</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Anggota -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Ubah Anggota</h5>
            </div>
            <form action="/mjbcon/menjabats" id="formanggotaedt" method="POST">
                @method('patch')
                @csrf
                <div class="modal-body teks-kecil">
                    <input type="hidden" id="id_edt" name="id">

                    <div class="mb-3 ms-3 row">
                        <label for="nama_edt" class="col-sm-4 col-form-label">Nama Anggota</label>
                        <div class="col-sm-7">
                            <input type="text" id="nama_edt" class="form-control-plaintext" >                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="nim_edt" class="col-sm-4 col-form-label">NIM </label>
                        <div class="col-sm-7">
                            <input type="text" id="nim_edt" class="form-control-plaintext">                            
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sie_id_edt"
                                    class="form-label @error('sie_id') is-invalid @enderror">Sie</label>
                                <select class="form-select" id="sie_id_edt" name="sie_id">
                                    <option selected value="" >Pilih Sie</option>
                                    @foreach ($sies as $sie)                                        
                                        <option value="{{ $sie->id }}">{{ $sie->nama_sie }}</option>
                                    @endforeach
                                </select>
                                @error('sie_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jabatan_id_edt"
                                    class="form-label @error('jabatan_id') is-invalid @enderror">Jabatan</label>
                                <select class="form-select" id="jabatan_id_edt" name="jabatan_id">
                                    <option selected value="" >Pilih Jabatan</option>
                                    @foreach ($jabatans as $jabatan)                                        
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="col-12 d-flex justify-content-between">
                        <button type="submit" class="btn btn-danger rounded-pill me-2" name="status" value="ditolak">Hapus Anggota</button>                    
                        <button type="button" class="btn btn-outline-secondary rounded-pill ms-5"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary rounded-pill" name="status" value="aktif">Update Panitia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Rekrutmen Anggota -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Kelola Rekrutmen</h5>
            </div>
            <form action="/mjbcon/menjabats" id="formrekrutedt" method="POST">
                @method('patch')
                @csrf
                <div class="modal-body teks-kecil">
                    <input type="hidden" id="id_rek" name="id">

                    <div class="mb-3 ms-3 row">
                        <label for="nama_rek" class="col-sm-4 col-form-label">Nama Anggota</label>
                        <div class="col-sm-7">
                            <input type="text" id="nama_rek" class="form-control-plaintext" >                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="nim_rek" class="col-sm-4 col-form-label">NIM </label>
                        <div class="col-sm-7">
                            <input type="text" id="nim_rek" class="form-control-plaintext">                            
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sie_id_rek"
                                    class="form-label @error('sie_id') is-invalid @enderror">Sie</label>
                                <select class="form-select" id="sie_id_rek" name="sie_id">
                                    <option selected value="" >Pilih Sie</option>
                                    @foreach ($sies as $sie)                                        
                                        <option value="{{ $sie->id }}">{{ $sie->nama_sie }}</option>
                                    @endforeach
                                </select>
                                @error('sie_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jabatan_id_rek"
                                    class="form-label @error('jabatan_id') is-invalid @enderror">Jabatan</label>
                                <select class="form-select" id="jabatan_id_rek" name="jabatan_id">
                                    <option selected value="" >Pilih Jabatan</option>
                                    @foreach ($jabatans as $jabatan)                                        
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="col-12 d-flex justify-content-between">
                        <button type="submit" class="btn btn-danger rounded-pill me-2" name="status" value="ditolak">Tolak</button>                    
                        <button type="button" class="btn btn-outline-secondary rounded-pill ms-5"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary rounded-pill" name="status" value="aktif">Terima</button>
                    </div>
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

<script>
    $(function(){
        $('.anggota-edt').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const nim = $(this).data('nim');
            const sie = $(this).data('sie');
            const jabatan = $(this).data('jabatan');

            const act="/mjbcon/menjabats";

            $('#formanggotaedt').attr('action',act+"/"+id);

            console.log($('#formanggotaedt').attr('action'));
            
            $('#id_edt').val(id);
            $('#nama_edt').val(nama);
            $('#nim_edt').val(nim);
            $('#jabatan_id_edt').val(jabatan);
            $('#sie_id_edt').val(sie);
            
        });

        $('.rekrut-edt').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const nim = $(this).data('nim');
            const sie = $(this).data('sie');
            const jabatan = $(this).data('jabatan');

            const act="/mjbcon/menjabats";

            $('#formrekrutedt').attr('action',act+"/"+id);

            console.log($('#formrekrutedt').attr('action'));
            
            $('#id_rek').val(id);
            $('#nama_rek').val(nama);
            $('#nim_rek').val(nim);
            $('#jabatan_id_rek').val(jabatan);
            $('#sie_id_rek').val(sie);
            
        });

        $('.sie-edt').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const deskripsi = $(this).data('deskripsi');

            const act="/gajalan/siecon/sies";

            $('#formedtsie').attr('action',act+"/"+id);

            console.log($('#formedtsie').attr('action'));
            
            $('#id_sie_edt').val(id);
            $('#namasie_edt').val(nama);
            $('#deskripsi_sie_edt').val(deskripsi);
            
        });
    });
</script>

@endsection