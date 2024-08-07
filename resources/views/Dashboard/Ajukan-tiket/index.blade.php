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
                    <form>
                        @csrf
                        <div class="text-center mt-3">
                            {{-- <img class="mb-4" src="/img/logo.png" alt="Logo" width="10%">
                            <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1> --}}
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFullName" placeholder="ID Tiket">
                            <label for="floatingFullName">ID Tiket</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingUsername" placeholder="Nama Bagian">
                            <label for="floatingUsername">Nama Bagian</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Default select example">
                                <option selected>Pilih</option>
                                @foreach ($masalah as $item)
                                <option value="{{ $item->id }}">{{ $item->jenis_masalah }}</option>

                            @endforeach
                            </select>
                            <label for="floatingSelectGrid">Jenis Permasalahan</label>
                        </div>

                        <div class="mb-3">
                            <label for="penjelasan" class="form-label">Penjelasan Permasalah</label>
                            <textarea class="form-control" id="penjelasan" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan yang sudah dilakukan</label>
                            <textarea class="form-control" id="tindakan" rows="3"></textarea>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
                    </form>


        </main>


    </div>

    {{-- akhir form ajukan tiket --}}
@endsection
