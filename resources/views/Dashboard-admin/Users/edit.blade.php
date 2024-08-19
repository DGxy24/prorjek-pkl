{{-- menu edit user --}}
@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profil</h1>
        <a class="btn btn-danger" href="/dashboard-admin/user" role="button"> <i class="bi bi-arrow-left-square-fill"></i> </a>

    </div>


    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    {{-- Form Daftar --}}
                    <form action="/dashboard-admin/user/{{ $user[0]->id }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="text-center mt-3">
                            <h1 class="h3 mb-3 fw-normal">Form Edit Profil</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text"
                                class="form-control @error('name') is-invalid
                        @enderror"
                                id="name" name="name" value="{{ old('name', $user[0]->name) }}"
                                id="floatingFullName" placeholder="Nama Lengkap">
                            <label for="floatingFullName">Nama Lengkap</label>
                            {{-- Proses Validasi --}}
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text"
                                class="form-control @error('username') is-invalid
                        @enderror"
                                id="username" name="username" value="{{ old('username', $user[0]->username) }}"
                                id="floatingUsername" placeholder="Username" readonly>
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
                                <option value="{{ $user[0]->bagian->id }}">{{ $user[0]->bagian->nama_bagian }}</option>
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
                                id="email" name="email" value="{{ old('email', $user[0]->email) }}"
                                id="floatingEmail" placeholder="name@example.com" readonly>
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
