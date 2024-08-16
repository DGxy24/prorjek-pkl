@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Penanganan IT</h1>
        <a class="btn btn-danger" href="/dashboard/tiket-proses" role="button"> <i class="bi bi-arrow-left-square-fill"></i>
        </a>

    </div>

    <div class="container">
        <main class="form-signin">

            <div class="row justify-content-center">
                <div class="col-12 ">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Laporan</h5>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#pdfModal">
                                <i class="bi bi-filetype-pdf"></i>
                            </button>
                        </div>
                     
                        <div class="card-body d-flex justify-content-between align-items-start">
                            <div>
                       
                                <h5 class="card-title">Penanganan Bidang {{ auth()->user()->bagian->nama_bagian }}</h5>
                                <p class="card-text">ID Tiket : {{ $status[0]->tiket_id }}</p>

                                <p class="card-text">Permasalahan : {{ $status[0]->tiket->permasalahan->jenis_masalah }}</p>
                                <p class="card-text">Tindakan : {{ $status[0]->tindakan }}
                                </p>
                                <a href="#" class="btn btn-success">Selesai</a>
                                <a href="#" class="btn btn-danger">Belum</a>
                            </div>
                            <div class="mx-auto">
                                <iframe src="{{ asset('img/') }}" width="447px" height="390px"
                                    class="d-block mx-auto">
                                </iframe>
                            </div>
                
                        </div>
                    </div>


                </div>


        </main>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
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
                    <iframe src="" id="pdfFrame" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
