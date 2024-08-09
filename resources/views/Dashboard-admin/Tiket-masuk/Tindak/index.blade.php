@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tindak Lanjut</h1>

    </div>
    {{-- form tiket setuju--}}

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
                            <input type="text" class="form-control" id="bagian_id" name="bagian_id" placeholder="ID User" readonly
                            value="">
                            <label for="floatingFullName">Bagian</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id" name="permasalahan_id" placeholder="ID User" readonly
                            value="">
                            <label for="floatingFullName">Permasalahan</label>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan yang sudah dilakukan bagian</label>
                            <textarea class="form-control @error('tindakan') is-invalid
                        @enderror" id="tindakan" name="tindakan" value="{{ old('tindakan') }}" id="tindakan" rows="3" readonly></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan dari IT</label>
                            <textarea class="form-control @error('tindakanIT') is-invalid
                        @enderror" id="tindakanIT" name="tindakanIT" value="{{ old('tindakanIT') }}" id="tindakanIT" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                        <label for="formFile" class="form-label">Bukti Tindakan IT</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>

                        <button class="w-5 btn btn-lg btn-primary mt-4 mb-4" type="submit">SUBMIT</button>
                    </form>


        </main>


    </div>

    {{-- akhir form tiket setuju --}}
@endsection
