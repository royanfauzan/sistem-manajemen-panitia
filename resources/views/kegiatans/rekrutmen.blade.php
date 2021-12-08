@extends('layouts.main')
@section('content')

<div class="row mt-4">
    <div class="col-12">
        <div class="container p-0">
            <div class="row pe-4 mt-3">
                <div class="col">
                    <h4 class="h4 fw-normal text-secondary"><b>Rekrutmen Kepanitiaan</b></h4>
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
                    <div class="row mt-3 justify-content-center">
                        @if ($openreksies!=null)                            
                            @foreach ($openreksies as $openreksie)                            
                                <div class="col-md-3 ph-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <p class="h5 card-title mb-2"><b>{{ $openreksie->nama_sie }}</b></p>
                                            <p class="text-secondary"><small>{{ $openreksie->kegiatan->nama_kegiatan }}</small></p>
                                            <p class="mt-3 text-start">{{ $openreksie->deskripsi_sie }}</p>
                                            <p class="p-0 mb-0"><small><a href="#">...</a></small></p>
                                            @if (!in_array($openreksie->kegiatan->id,$kegdiikuti))
                                                <button type="button" class="btn btn-primary rounded rounded-pill mendaftar" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-nama="{{ $openreksie->nama_sie }}"
                                                data-id="{{ $openreksie->id }}"
                                                data-kegiatan="{{ $openreksie->kegiatan->nama_kegiatan }}"
                                                data-penyelenggara="{{ $openreksie->kegiatan->penyelenggara }}"
                                                data-deskripsi="{{ $openreksie->deskripsi_sie }}"
                                                >Mendaftar</button>
                                                
                                            @else
                                                <button type="button" class="btn btn-secondary rounded rounded-pill">Terdaftar</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>     
                            @endforeach
                        @else 
                                <div class="col">
                                    <p>Tidak Ada Open Rekrutmen</p>
                                </div>
                        @endif                  
                    </div>
                </div>
            </div>
            <div class="row justify-content-end mt-4">
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-primary rounded rounded-pill"><i class="bi bi-caret-left"></i></a>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <a href="#" class="btn btn-outline-primary rounded rounded-pill"><i class="bi bi-caret-right"></i></a>
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
                <h5 class="h5 text-center" id="exampleModalLabel">Mendaftar SIE</h5>
                
            </div>
            <form action="/mjbcon/menjabats" method="POST">
                @csrf
                <div class="modal-body ms-2">
                    <input type="hidden" name="mendaftar" value="mendaftar">
                    <input type="hidden" id="nim" name="nim" value="1">
                    <input type="hidden" id="sie_id" name="sie_id">
                    <input type="hidden" id="jabatan_id" name="jabatan_id" value="1">
                    
                    <p><small><i>info sie :</i></small></p>

                    <div class="mb-3 ms-3 row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama SIE</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_sie" id="nama" class="form-control-plaintext" value=": Nama SIE 1">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="nama_kegiatan" class="col-sm-4 col-form-label">Kegiatan</label>
                        <div class="col-sm-7">
                            <input type="teks" name="nama_kegiatan" id="namakeg" class="form-control-plaintext" value=": Nama Kegiatan">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="penyelenggara" class="col-sm-4 col-form-label">Penyelenggara</label>
                        <div class="col-sm-7">
                            <input type="nim" name="nim" id="penyelenggara" class="form-control-plaintext" value=": Nama Penyelenggara">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea type="nim" name="deskripsi" id="deskripsi" class="form-control-plaintext">: Deskripsi SIE</textarea>                            
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <p class="text-center d-blok"> Apakah anda yakin mendaftar sie pada kegiatan ini?</p>
                        <div class="col-md-6">
                            <div class="row">
                                    <button type="button" class="col-5 btn btn-outline-secondary rounded-pill me-2"
                                data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="col-6 btn btn-outline-primary rounded-pill ms-2">Mendaftar</button>
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
        $('.mendaftar').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const penyelenggara = $(this).data('penyelenggara');
            const deskripsi = $(this).data('deskripsi');
            const kegiatan = $(this).data('kegiatan');


            
            $('#sie_id').val(id);
            $('#nama').val(": "+nama);
            $('#namakeg').val(": "+kegiatan);
            $('#penyelenggara').val(": "+penyelenggara);
            $('#deskripsi').val(": "+deskripsi);
            
        })
    });
</script>

@endsection