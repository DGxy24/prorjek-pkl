{{-- menu tabel tiket lanjutan  --}}

@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Tindak Lanjutan</h1>
        <a class="btn btn-danger" href="/dashboard/tiket-proses" role="button"> <i class="bi bi-arrow-left-square-fill"></i>
        </a>
    </div>

    {{-- <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Alasan/Tindakan</th>
                    <th scope="col">Bukti</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>tiket_id</td>
                    <td>nama_user</td>
                    <td>test</td>
                    <td>button pdf view</td>
                    <td>
                        <a class="btn btn-danger btn-sm"><span data-feather="eye"><i class="bi bi-envelope"></i></span></a>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>tiket_id</td>
                    <td>nama_admin</td>
                    <td>test</td>
                    <td>button pdf view</td>
                    <td>
                        <a class="btn btn-danger btn-sm"><span data-feather="eye"><i class="bi bi-envelope"></i></span></a>
                    </td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> --}}

    <div class="card mb-3">
        <div class="card-header">
            <strong>Tiket ID: {{ $tiket[0]->tiket_id }}</strong>
        </div>
        <div class="card-body">
            <!-- Chat antara user dan admin -->
            @foreach($tiket as $item)

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var pdfModal = document.getElementById("pdfModal");
                    pdfModal.addEventListener("show.bs.modal", function(event) {
                        var button = event.relatedTarget;
                        var pdfSrc =
                        '{{ asset('storage/' . $item->bukti) }}'; // Gantilah dengan path dinamis jika ada
                        var pdfFrame = document.getElementById("pdfFrame");
                        var downloadPdfBtn = document.getElementById("downloadPdfBtn");
        
                        // Set src untuk iframe dan href untuk tombol download
                        pdfFrame.src = pdfSrc;
                        downloadPdfBtn.href = pdfSrc;
                    });
        
                    pdfModal.addEventListener("hidden.bs.modal", function() {
                        var pdfFrame = document.getElementById("pdfFrame");
                        pdfFrame.src = ""; // Kosongkan src saat modal ditutup
                    });
                });
            </script>
            <div class="media mb-3 d-flex align-items-center">
                <img src="/img/profile-user.png" class="rounded-circle" alt="User Avatar" width="40" height="40">
                <div class="media-body ml-3">
                    <h5 class="mt-0">{{ $item->user->name }}</h5>
                    <p>{{ $item->tindakan }}</p>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#pdfModal"
                    onclick="ShowPDF( '{{ asset('storage/' . $item->bukti) }}');">
                        <i class="bi bi-filetype-pdf"></i>
                    </button>
                </div>
 
            </div>
            <hr>
            @endforeach
            
        </div>
        <div class="card-footer">
            <a class="btn btn-danger btn-sm"><span data-feather="eye"><i class="bi bi-envelope"></i></span> Kirim Pesan</a>
        </div>
    </div>


    <!-- Modal -->
    {{-- <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Bukti PDF</h5>
                    <div class="d-flex">

                        <a id="downloadPdfBtn" href="#" class="btn btn-success btn-sm me-2" download>
                            Download PDF
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                
                <div class="modal-body">
                    <iframe src="{{ asset('storage/' . $item->bukti)}}" id="pdfFrame" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h5 class="modal-title" id="exampleModalLabel">Bukti</h5>
                    
                    <div class="d-flex">

                        {{-- <a id="downloadPdfBtn" href="#" class="btn btn-success btn-sm me-2" download>
                            Download PDF
                        </a> --}}
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

