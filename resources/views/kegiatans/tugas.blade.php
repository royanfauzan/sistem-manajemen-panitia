@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="row pe-4 mt-3">
            <div class="col">
                <h4 class="h4 fw-normal text-secondary"><b>List Tugas {{ $sie->nama_sie }}</b></h4>
            </div>
        </div>
        
        <div class="row mt-3 me-5 p-4">
            <div class="col">
                @foreach ($tugass as $tugas)            
                    <div class="row mt-3">
                        <div class="card @if (!strcmp($tugas->status_tugas,'selesai'))
                            border-success
                        @endif">
                            <div class="card-body teks-kecil">
                                <h5 class="h5 fw-normal text-secondary"><b>{{ $tugas->judul }}</b></h5>
                                
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-7">
                                        <textarea type="nim" name="nim" class="form-control-plaintext">: {{ $tugas->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Status Tugas</label>
                                    <div class="col-7">
                                        <input type="nim" name="nim" class="form-control-plaintext"
                                            value=":  {{ $tugas->status_tugas }}">
                                    </div>
                                </div>    
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Catatan</label>
                                    <div class="col-7">
                                        <input type="nim" name="nim" class="form-control-plaintext"
                                            value=": {{ $tugas->catatan }}">
                                    </div>
                                </div>  
        
                                <div class="mb-3 ms-3 row">
                                    <label for="inputNim" class="col-4 col-form-label">Lampiran</label>
                                    <div class="col-7">
                                        <input type="nim" name="nim" class="form-control-plaintext" value=": @if(!empty($tugas->lampiran))
                                            {{ $tugas->lampiran }}
                                        @endif">
                                    </div>
                                </div>
        
                                <div class="mb-3 ms-3 row justify-content-end">
                                    @if (strcmp($tugas->status_tugas,'selesai'))
                                    <button type="button" class="col-lg-2 col-md-3 col-sm-4 btn btn-link me-2 teks-kecil tgs-edt"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                        data-id="{{ $tugas->id }}" data-judul="{{ $tugas->judul }}" data-deskripsi="{{ $tugas->deskripsi }}"
                                        data-status="{{ $tugas->status_tugas }}" data-lampiran="{{ $tugas->lampiran }}">Tandai Selesai</button>
                                        @endif
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
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h5 class="h5 text-center" id="exampleModalLabel">Tambah Tugas</h5>

            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body teks-kecil">
                    <div class="mb-3">
                        <label for="judul" class="form-label @error('judul') is-invalid @enderror">Nama
                            Tugas</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi"
                            class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<!-- Modal Edit -->
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
                    <hr>
                    <div class="mb-3 ms-3">
                        <label for="lampiran" class="form-label">Lampiran Tugas(pdf/docx) | <small><i> *Optional</i></small></label>
                        <input class="form-control form-control-sm" id="lampiran" name="lampiran" type="file">
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <p class="text-center d-blok"> Tandai Sebagai Tugas Selesai?</p>
                        <div class="col-md-6">
                            <div class="row">
                                    <button type="button" class="col-5 btn btn-outline-secondary rounded-pill me-2"
                                data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="col-6 btn btn-outline-primary rounded-pill ms-2" name="status" value="menunggu">Selesai</button>
                            </div>                            
                        </div>
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