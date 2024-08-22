{{-- menu tabel tiket lanjutan  --}}

@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Tindak Lanjutan</h1>
        <a class="btn btn-danger" href="/dashboard/tiket-proses" role="button"> <i class="bi bi-arrow-left-square-fill"></i>
        </a>
    </div>



    <div class="card mb-3">
        <div class="card-header" style="background-color: #85A2A1; color: black;">
            <strong>Tiket ID: {{ $tiket[0]->tiket_id }}</strong>
        </div>
        <div class="card-body">
            <!-- Chat antara user dan admin -->
            @foreach ($tiket as $item)
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var pdfModal = document.getElementById("pdfModal");
                        pdfModal.addEventListener("show.bs.modal", function(event) {
                            var button = event.relatedTarget;

                            var pdfSrc = button.getAttribute('onclick').match(/ShowPDF\('(.*?)'\)/)[1];
                            var pdfFrame = document.getElementById("modalPdf");
                            var downloadPdfBtn = document.getElementById("downloadPdfBtn");

                            // Set src untuk iframe dan href untuk tombol download
                            pdfFrame.src = pdfSrc;
                            downloadPdfBtn.href = pdfSrc;
                        });

                        pdfModal.addEventListener("hidden.bs.modal", function() {
                            // var pdfFrame = document.getElementById("pdfFrame");
                            var pdfFrame = document.getElementById("pdfFrame");
                            pdfFrame.src = ""; // Kosongkan src saat modal ditutup
                        });
                    });
                </script>

                {{-- <div class="media mb-3 d-flex align-items-center">
                    <img src="/img/profile-user.png" class="rounded-circle" alt="User Avatar" width="40" height="40">
                    <div class="media-body ml-3">
                        <h5 class="mt-0">{{ $item->user->name }}</h5>
                        <p>{{ $item->tindakan }}</p>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#pdfModal" onclick="ShowPDF('{{ asset('storage/' . $item->bukti) }}');">
                            <i class="bi bi-filetype-pdf"></i>
                        </button>
                    </div>
                </div> --}}
                <div class="media mb-3 d-flex align-items-center">
                    <img src="/img/profile-user.png" class="rounded-circle" alt="User Avatar" width="40" height="40">
                    <div class="media-body ml-3 w-100">
                        <div class="shadow p-2" style="background-color: #e2e9e9;">
                            <h5 class="mt-0">{{ $item->user->name }}</h5>
                            <p>{{ $item->tindakan }}</p>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#pdfModal" onclick="ShowPDF('{{ asset('storage/' . $item->bukti) }}');">
                                <i class="bi bi-filetype-pdf"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <hr>
            @endforeach

        </div>
        {{-- dashboard/tiket-status/create/{tiket} --}}
        <div class="card-footer" style="background-color: #85A2A1;">
            <a href="/dashboard/tiket-status/create/{{ $tiket[0]->tiket_id }}" class="btn btn-custom" style="background-color: #374750; color: white;">Kirim
                Pesan</a>
            <a href="/dashboard/tiket-status/selesai/{{ $tiket[0]->id }}" class="btn btn-custom"
                style="background-color: #374750; color: white;">Selesai</a>
        </div>
    </div>



    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti</h5>
                    <div class="d-flex">
                        <a id="downloadPdfBtn" href="#" class="btn btn-success btn-sm me-2" download>
                            Download PDF
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>

                <div class="modal-body">
                    <table class="table table-sm">
                        <tr>
                            <th>File PDF</th>
                            <td>
                                <iframe id="modalPdf" src="" width="100%" height="400px"></iframe>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
