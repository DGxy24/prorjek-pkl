@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tindak Lanjut</h1>
        <a class="btn btn-danger" href="/dashboard-admin/tiket/proses" role="button"> <i
                class="bi bi-arrow-left-square-fill"></i>
        </a>
    </div>

    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    {{-- Form Tindak Lanjut --}}
                    <form action="/dashboard-admin/tiket/proses" method="POST">
                        @csrf
                        <div class="text-center mt-3">

                            <h1 class="h3 mb-3 fw-normal">Form Tindak Lanjut</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tiket_id" name="tiket_id" placeholder="ID User"
                                readonly value="{{ $tiket[0]->id}}">
                            <label for="floatingFullName">ID Tiket </label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="bagian_id" name="bagian_id" 
                            value="{{ $tiket[0]->bagian->nama_bagian }}" readonly>
                            <label for="floatingUsername">Bagian</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id"
                            value="{{ $tiket[0]->permasalahan->jenis_masalah }}" name="permasalahan_id" readonly>
                        <label for="floatingUsername">Permasalahan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id"
                            value="{{ $tiket[0]->penjelasan }}" name="permasalahan_id" readonly>
                        <label for="floatingUsername">Penjelasan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id"
                            value="{{ $tiket[0]->tindakan }}" name="permasalahan_id" readonly>
                        
                            <label for="floatingUsername">Tindakan</label>
                        </div>
                        {{-- pakai ini di conttrolernya agar input tindakkanya bersih --}}
                        {{-- $validatedData['tindakan'] = strip_tags($request->input('tindakan')); --}}
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan Lanjut yang dilakukan</label>
                            @error('tindakan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="tindakan" type="hidden" name="tindakan" value="{{ old('tindakan') }}">
                            <trix-editor input="tindakan"></trix-editor>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File Pdf</label>
                            <input class="form-control" type="file" id="formFile">
                        </div> --}}


                        <div class="mb-3">
                            
                            <label for="formFile" class="form-label">Upload File Pdf</label>
                            <div class="d-flex align-items-center mt-2">
                                <input class="form-control  @error('bukti') is-invalid
                        @enderror" value="{{ old('bukti') }}" type="file" id="formFile" accept="application/pdf" name="bukti">
                                <a href="#" id="viewPdfBtn" class="btn btn-warning ms-3" style="display: none;"
                                    target="_blank" ><i class="bi bi-filetype-pdf"></i></a>

                                    @error('bukti')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                        </div>

                </div>

                <button class="w-5 btn btn-lg btn-primary mb-4" type="submit">SUBMIT</button>
                </form>


        </main>


    </div>
@endsection
