@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Form Tindak Ulang</h1>
        <a class="btn btn-danger" href="/dashboard-admin/tiket/proses" role="button"> <i
                class="bi bi-arrow-left-square-fill"></i>
        </a>

    </div>
    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <form action="/dashboard-admin/tiket/status" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center mt-3">
                            <h1 class="h3 mb-3 fw-normal">Form Tindak</h1>
                        </div>
                        {{-- Menyimpan User ID, tidak muncul di user --}}
                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">

                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="ID User"
                                readonly value="{{ auth()->user()->id }}">
                            {{-- <label for="floatingFullName">User ID </label> --}}
                        </div>

                        {{-- Menyimpan Tiket ID, tidak muncul di user --}}
                        <input type="hidden" class="form-control" id="tiket_id" name="tiket_id"
                            value="{{ $tiket[0]->id }}">


                        <div class="mb-3">
                            <label for="alasan" class="form-label">Tindak Lanjut IT</label>
                            @error('tindakan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="tindakan" type="hidden" name="tindakan" value="{{ old('tindakan') }}">
                            <trix-editor input="tindakan"></trix-editor>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File Pdf</label>
                            <div class="d-flex align-items-center mt-2">
                                <input class="form-control"type="file" id="formFile" accept="application/pdf"
                                    name="bukti">
                                <button id="viewPdfBtn" class="btn btn-warning ms-3" style="display: none;"
                                    data-bs-toggle="modal" data-bs-target="#pdfModal1">
                                    <i class="bi bi-filetype-pdf"></i>
                                </button>
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
