@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>Agenda {{ $kegiatan->nama_kegiatan }}</b></h4>
            </div>
            <div class="col-md-3 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i> Tambah Kegiatan
                </button>
            </div>
        </div>
        <div class="row mt-3 me-5 p-4">
            <div class="col">
                @foreach ($agendas as $agenda)                    
                    <div class="row mt-3">
                        <div class="card">
                            <div class="card-body teks-kecil">
                                <h5 class="h5 fw-normal text-secondary"><b>{{ $agenda->nama_agenda }}</b></h5>
                                
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-7">
                                        <textarea type="nim" name="nim" class="form-control-plaintext">: {{ $agenda->deskripsi_agenda }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Dilaksanakan pada</label>
                                    <div class="col-7">
                                        <input type="text" name="nim" class="form-control-plaintext"
                                            value=": (Mulai) {{ $agenda->tanggal_mulai }}">
                                        <input type="text" name="nim" class="form-control-plaintext"
                                            value=": (Selesai) {{ $agenda->tanggal_selesai }}">
                                    </div>
                                </div>    
        
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Lokasi</label>
                                    <div class="col-7">
                                        <input type="nim" name="nim" class="form-control-plaintext" value=": {{ $agenda->lokasi }}">
                                    </div>
                                </div>
        
                                <div class="mb-3 ms-3 row justify-content-end">
                                    <button type="button" class="col-lg-2 col-md-3 col-sm-4 btn btn-link me-2 teks-kecil tbl-edt"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal2" 
                                        data-id="{{ $agenda->id }}"
                                        data-nama="{{ $agenda->nama_agenda }}"
                                        data-deskripsi="{{ $agenda->deskripsi_agenda }}"
                                        data-tglm="{{ date('Y-m-d\TH:i', strtotime($agenda->tanggal_mulai)) }}"
                                        data-tgls="{{ date('Y-m-d\TH:i', strtotime($agenda->tanggal_selesai)) }}"
                                        data-lokasi="{{ $agenda->lokasi }}">Ubah Detil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
            <form action="/agndcon/agendas" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <input type="hidden" id="kegiatan_id" name="kegiatan_id" value="{{ $kegiatan->id }}">
                    <div class="mb-3">
                        <label for="namaagenda" class="form-label @error('nama_agenda') is-invalid @enderror">Nama
                            Agenda</label>
                        <input type="text" class="form-control" id="namaagenda" name="nama_agenda">
                        @error('nama_agenda')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_agenda"
                            class="form-label @error('deskripsi_agenda') is-invalid @enderror">Deskripsi_agenda</label>
                        <textarea type="text" class="form-control" id="deskripsi_agenda"
                            name="deskripsi_agenda"></textarea>
                    </div>
                    @error('deskripsi_agenda')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_mulai"
                                    class="form-label @error('tanggal_mulai') is-invalid @enderror">Tanggal Mulai</label>
                                <input type="datetime-local" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                                @error('tanggal_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_selesai"
                                    class="form-label @error('tanggal_selesai') is-invalid @enderror">Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                                @error('tanggal_selesai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi"
                            class="form-label @error('lokasi') is-invalid @enderror">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                        @error('lokasi')
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
                <h5 class="h5 text-center" id="exampleModalLabel">Ubah Agenda</h5>
            </div>
            <form action="/agndcon/agendas" method="POST" id="formedtagnd">
                @method('patch')
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="mb-3">
                        <label for="namaagenda1" class="form-label @error('nama_agenda') is-invalid @enderror">Nama
                            Agenda</label>
                        <input type="text" class="form-control" id="namaagenda1" name="nama_agenda">
                        @error('nama_agenda')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_agenda1"
                            class="form-label @error('deskripsi_agenda') is-invalid @enderror">Deskripsi_agenda</label>
                        <textarea type="text" class="form-control" id="deskripsi_agenda1"
                            name="deskripsi_agenda"></textarea>
                    </div>
                    @error('deskripsi_agenda')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_mulai1"
                                    class="form-label @error('tanggal_mulai') is-invalid @enderror">Tanggal Mulai</label>
                                <input type="datetime-local" class="form-control" id="tanggal_mulai1" name="tanggal_mulai">
                                @error('tanggal_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_selesai1"
                                    class="form-label @error('tanggal_selesai') is-invalid @enderror">Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" id="tanggal_selesai1" name="tanggal_selesai">
                                @error('tanggal_selesai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi1"
                            class="form-label @error('lokasi') is-invalid @enderror">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi1" name="lokasi">
                        @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

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

<script>
    $(function(){
        $('.tbl-edt').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const deskripsi = $(this).data('deskripsi');
            const tglm = $(this).data('tglm');
            const tgls = $(this).data('tgls');
            const lokasi = $(this).data('lokasi');

            const act='/agndcon/agendas';

            $('#formedtagnd').attr('action',act+"/"+id);

            console.log($('#formedtagnd').attr('action'));
            
            $('#id').val(id);
            $('#namaagenda1').val(nama);
            $('#deskripsi_agenda1').val(deskripsi);
            $('#tanggal_mulai1').val(tglm);
            $('#tanggal_selesai1').val(tgls);
            $('#lokasi1').val(lokasi);

            
        })
    });
</script>

@endsection