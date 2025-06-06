{{-- menu edit user --}}
@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Akun</h1>
        <a class="btn btn-danger" href="/dashboard-admin/user" role="button"> <i class="bi bi-arrow-left-square-fill"></i> </a>

    </div>


    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    {{-- Form Daftar --}}
                    <form action="/dashboard-admin/user" method="POST">
                        @csrf

                        {{--  <input type="telp" class="form-control @error('no_hp') is-invalid
                        @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                        @enderror --}}
                        <div class="text-center mt-3">
                            <h1 class="h3 mb-3 fw-normal">Form Buat Akun</h1>
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


                        <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">SUBMIT</button>
                    </form>


        </main>


    </div>
@endsection
