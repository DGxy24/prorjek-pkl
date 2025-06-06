<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <title>Form Daftar</title>
</head>

<body>
    <header>
        <div class="navbar navbar-dark " style="background:#7DA3A1 ">
            <div class="container p-3">



            </div>
        </div>
    </header>
    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    {{-- Form Daftar --}}
                    <form action="{{ route('daftar') }}" method="POST">
                        @csrf

                        <div class="text-center mt-3">
                            <a href="/">
                                <img class="mb-4" src="/img/logo.png" alt="Logo" width="10%">
                            </a>
                            <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text"
                                class="form-control @error('name') is-invalid
                        @enderror"
                                id="name" name="name" value="{{ old('name') }}" id="floatingFullName"
                                placeholder="Nama Lengkap">
                            <label for="floatingFullName">Nama Lengkap</label>
                            {{-- Proses Validasi --}}
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- tes --}}
                        <div class="form-floating mb-3">
                            <input type="text"
                                class="form-control @error('username') is-invalid
                        @enderror"
                                id="username" name="username" value="{{ old('username') }}" id="floatingUsername"
                                placeholder="Username">
                            <label for="floatingUsername">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select
                                class="form-select  @error('bagian_id') is-invalid
                            @enderror"
                                id="bagian_id" name="bagian_id" aria-label="Default select example">
                                {{-- Menampilkan nama bagian berdasarkan tabel bagian --}}
                                <option value="">Pilih</option>
                                @foreach ($bagian as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_bagian }}</option>
                                @endforeach

                            </select>
                            <label for="floatingSelectGrid">Pilih Bidang/Bagian</label>
                            @error('bagian_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email"
                                class="form-control  @error('email') is-invalid
                        @enderror"
                                id="email" name="email" value="{{ old('email') }}" id="floatingEmail"
                                placeholder="name@example.com">
                            <label for="floatingEmail">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password"
                                class="form-control @error('password') is-invalid
                        @enderror"
                                id="password" name="password" value="{{ old('password') }}" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">DAFTAR</button>
                    </form>


        </main>


    </div>

</body>

</html>
