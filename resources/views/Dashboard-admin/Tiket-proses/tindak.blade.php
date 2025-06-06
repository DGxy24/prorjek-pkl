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
                    <form action="/dashboard-admin/tiket/proses" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="text-center mt-3">

                            <h1 class="h3 mb-3 fw-normal">Form Tindak Lanjut</h1>
                        </div>
                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tiket_id" name="tiket_id" placeholder="ID User"
                                readonly value="{{ $tiket[0]->id }}">
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

                        {{-- <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id"
                                value="{{ $tiket[0]->penjelasan }}" name="permasalahan_id" readonly>
                            <label for="floatingUsername">Penjelasan</label>
                        </div> --}}

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Penjelasan</label>
                            <textarea class="form-control" id="permasalahan_id" name="permasalahan_id" rows="3" readonly>{{ $tiket[0]->penjelasan }}</textarea>
                        </div>

                        {{-- <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="permasalahan_id"
                                value="{{ $tiket[0]->tindakan }}" name="permasalahan_id" readonly>
                            <label for="floatingUsername">Tindakan</label>
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tindakan</label>
                            <textarea class="form-control" id="tindakan_id" name="tindakan_id" rows="3" readonly>{{ $tiket[0]->tindakan }}</textarea>
                        </div>

                        {{-- pakai ini di conttrolernya agar input tindakkanya bersih --}}
                        {{-- $validatedData['tindakan'] = strip_tags($request->input('tindakan')); --}}
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan Lanjut dari IT</label>
                            @error('tindakan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="tindakan" type="hidden" name="tindakan" value="{{ old('tindakan') }}">
                            <trix-editor input="tindakan"></trix-editor>
                        </div>



                        <div class="mb-3">

                            <label for="formFile" class="form-label">Upload File Pdf</label>
                            <div class="d-flex align-items-center mt-2">

                                <input class="form-control  @error('bukti') is-invalid
                        @enderror"
                                    value="{{ old('bukti') }}" type="file" id="formFile" accept="application/pdf"
                                    name="bukti">

                                <button id="viewPdfBtn" class="btn btn-warning ms-3" style="display: none;"
                                    data-bs-toggle="modal" data-bs-target="#pdfModal1">
                                    <i class="bi bi-filetype-pdf"></i>
                                </button>
                                @error('bukti')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                        </div>

                        <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">SUBMIT</button>
                </div>

                </form>
        </main>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pdfModal1" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Lihat PDF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfFrame" src="" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection
