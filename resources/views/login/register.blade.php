<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-3 col-md-0 border-end me-3">
                <img class="mb-4 img-center rounded" src="Looper.png" width="250" height="250">
            </div>
            <div class="col-6 col-md-6  ms-3">
                <main class="form-signin">
                    <h1 class="h4 fw-normal text-center text-secondary"><b>Sistem Manajemen Kegiatan Kepanitiaan</b>
                    </h1>
                    <p class="text-center text-secondary fs-6 p-0 mb-5"><small>Sistem Manajemen Kegiatan Kepanitiaan di
                            Politeknik Negeri Bali</small></p>
                    <form action="/registrasi" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>
                            <div class="col-sm-7">
                                <input type="nim" name="nim" class="form-control @error('nim') is-invalid @enderror"
                                    id="inputNim" placeholder="NIM" value="{{ old('nim') }}">
                                @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="nama_user" name="nama_user"
                                    class="form-control @error('nama_user') is-invalid @enderror" id="inputNama"
                                    placeholder="nama" value="{{ old('nama_user') }}">
                                @error('nama_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                    placeholder="name@example.com" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_telpon" class="col-sm-2 col-form-label">No Hp</label>
                            <div class="col-sm-7">
                                <input type="number" name="no_telpon"
                                    class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon"
                                    placeholder="nomor telpon" value="{{ old('no_telpon') }}">
                                @error('no_telpon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="checkbox mb-3">
                                            <label>
                                                <input type="checkbox" id="tampilPass" value="remember-me"> Tampilkan
                                                Password
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Register</button>
                    </form>
                    <p class="mt-5 mb-3 text-muted">Sudah memiliki akun? <a href="/login">Login</a></p>
                </main>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="js/myScript.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>