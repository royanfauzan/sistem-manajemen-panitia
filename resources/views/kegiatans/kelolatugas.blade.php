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
                        @foreach ($tugassies as $tugassie)                            
                            <div class="row mt-2">
                                <div class="col-5"><b>{{ $tugassie->nama_sie }}</b></div>
                                <div class="col-4 text-center"><b>Status</b></div>
                                <div class="col-2"></div>
                            </div>
                            @foreach ($tugassie->tugases as $tugas)                                
                                <div class="row teks-kecil">
                                    <div class="col-5 ps-4">{{ $tugas->judul }}</div>
                                    <div class="col-4 text-center">{{ $tugas->status_tugas }}</div>
                                    <div class="col-2 text-center">detil</div>
                                </div>
                            @endforeach
                        @endforeach
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
                        @foreach ($menunggusies as $menunggusie)                            
                            <div class="row mt-2">
                                <div class="col-5"><b>{{ $menunggusie->nama_sie }}</b></div>
                                <div class="col-2 text-center"><b>Status</b></div>
                                <div class="col-3 text-center"><b>Aksi</b></div>
                            </div>
                            @foreach ($menunggusie->tugases as $tugas)                                
                                <div class="row teks-kecil mt-1">
                                    <div class="col-5 ps-4">{{ $tugas->judul }}</div>
                                    <div class="col-2 text-center">{{ $tugas->status_tugas }}</div>
                                    <div class="col-3 text-center">
                                        <div class="row">
                                            <button type="button" class="col-md-5 btn btn-link rounded-pill me-2 teks-kecil">Detil</button>
                                            <button type="submit" class="col-md-6 btn btn-outline-primary rounded-pill ms-2 teks-kecil tgs-edt" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                            data-id="{{ $tugas->id }}" data-judul="{{ $tugas->judul }}" data-deskripsi="{{ $tugas->deskripsi }}"
                                        data-status="{{ $tugas->status_tugas }}" data-lampiran="{{ $tugas->lampiran }}">Konfirmasi</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
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
                <h5 class="h5 text-center" id="exampleModalLabel">Tandai Tugas Selesai</h5>
                
            </div>
            <form action="/tgscon/tugas" method="POST" id="formtugasedt">
                @method('patch')
                @csrf
                <div class="modal-body ms-2">
                    <p><small><i>Detil Tugas:</i></small></p>

                    <input type="hidden" id="id" name="id">

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Judul Tugas</label>
                        <div class="col-sm-7">
                            <input type="text" id="judul" class="form-control-plaintext" value=": Nama SIE 1">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <input type="text" id="status_tugas" class="form-control-plaintext" value=": Nama Kegiatan">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea type="text" id="deskripsi" class="form-control-plaintext">: Deskripsi Tugas</textarea>                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                            <input type="text" id="lampiran" class="form-control-plaintext" value=":">                            
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Catatan <small><i>*opsional</i></small></label>
                        <div class="col-sm-7">
                            <input type="text" id="catatan" name="catatan" class="form-control">                            
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <p class="text-center d-blok"> Tandai Sebagai Tugas Selesai?</p>
                        <div class="col-md-10">
                            <div class="row">
                                    <button type="submit" class="col-3 btn btn-danger rounded-pill me-2" name="status" value="revisi">Revisi</button>
                                    <button type="button" class="col-3 btn btn-outline-secondary rounded-pill ms-2 me-2"
                                data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="col-4 btn btn-outline-primary rounded-pill ms-2" name="status" value="selesai">Selesai</button>
                            </div>                            
                        </div>
                    </div>
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
            <form action="/tgscon/tugas" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sie_id"
                                    class="form-label @error('sie_id') is-invalid @enderror">Tugas Sie</label>
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

<script>
    $(function(){
        $('.tgs-edt').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const judul = $(this).data('judul');
            const status = $(this).data('status');
            const deskripsi = $(this).data('deskripsi');
            const lampiran = $(this).data('lampiran');

            const act="/tgscon/tugas";

            $('#formtugasedt').attr('action',act+"/"+id);

            console.log($('#formtugasedt').attr('action'));
            
            $('#id').val(id);
            $('#judul').val(judul);
            $('#status_tugas').val(status);
            $('#deskripsi').val(deskripsi);
            
        })
    });
</script>

@endsection