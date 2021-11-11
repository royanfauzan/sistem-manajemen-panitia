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
                        <div class="col-md-3 ph-3">
                            <div class="card text-center">
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
                            <div class="card text-center">
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
                            <div class="card text-center">
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
            <form action="/kegiatans" method="POST">
                @csrf
                <div class="modal-body ms-2">
                    <p><small><i>info sie :</i></small></p>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Nama SIE</label>
                        <div class="col-sm-7">
                            <input type="nim" name="nim" class="form-control-plaintext" value=": Nama SIE 1">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Kegiatan</label>
                        <div class="col-sm-7">
                            <input type="nim" name="nim" class="form-control-plaintext" value=": Nama Kegiatan">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Penyelenggara</label>
                        <div class="col-sm-7">
                            <input type="nim" name="nim" class="form-control-plaintext" value=": Nama Penyelenggara">                            
                        </div>
                    </div>

                    <div class="mb-3 ms-3 row">
                        <label for="inputNim" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea type="nim" name="nim" class="form-control-plaintext">: Deskripsi SIE</textarea>                            
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

@endsection