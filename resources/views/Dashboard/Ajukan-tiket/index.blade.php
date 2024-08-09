@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajukan Tiket</h1>

    </div>
    {{-- form ajukan tiket --}}

    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    {{-- Form AJUKAN --}}
                    <form action="{{ route('tiket.simpan') }}" method="POST">
                        @csrf
                        <div class="text-center mt-3">
                            {{-- <img class="mb-4" src="/img/logo.png" alt="Logo" width="10%">
                            <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1> --}}
                        </div>

                         {{--  <input type="telp" class="form-control @error('no_hp') is-invalid
                        @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                        @enderror --}}

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID User" readonly
                            value="{{ auth()->user()->id }}">
                            <label for="floatingFullName">User ID </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="bagian_id" name="bagian_id" placeholder="Nama Bagian" readonly 
                            value="{{ $bagian[0]->nama_bagian }}">
                            <label for="floatingUsername">Nama Bagian</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('permasalahan_id') is-invalid
                        @enderror" id="permasalahan_id" name="permasalahan_id" value="{{ old('permasalahan_id') }}" id="floatingSelectGrid" aria-label="Default select example">
                                <option value="">Pilih</option>
                                @foreach ($masalah as $item)
                                <option value="{{ $item->id }}">{{ $item->jenis_masalah }}</option>

                            @endforeach
                            </select>
                            <label for="floatingSelectGrid">Jenis Permasalahan</label>
                            @error('permasalahan_id')
                            <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                            @enderror 
                        </div>

                        <div class="mb-3">
                            <label for="penjelasan" class="form-label">Penjelasan Permasalah</label>
                            <textarea class="form-control @error('penjelasan') is-invalid
                        @enderror" id="penjelasan" name="penjelasan" value="{{ old('penjelasan') }}" id="penjelasan" rows="3"></textarea>
                        
                        @error('penjelasan')
                        <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                        @enderror 
                        </div>
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan yang sudah dilakukan</label>
                            <textarea class="form-control @error('tindakan') is-invalid
                        @enderror" id="tindakan" name="tindakan" value="{{ old('tindakan') }}" id="tindakan" rows="3"></textarea>
                        @error('tindakan')
                        <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                        @enderror 
                        </div>
                        </div>

                        <button class="w-5 btn btn-lg btn-primary mb-4" type="submit">SUBMIT</button>
                    </form>


        </main>


    </div>

    {{-- akhir form ajukan tiket --}}
@endsection
