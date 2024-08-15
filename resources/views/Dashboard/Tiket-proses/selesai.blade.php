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
                                <h5 class="card-title">Penanganan Bidang "nama_bidang"</h5>
                                <p class="card-text">ID Tiket : "tiket_id"</p>
                                <p class="card-text">Permasalahan : nama_masalah</p>
                                <p class="card-text">Tindakan : Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit ducimus nihil, veniam harum ex velit voluptatibus placeat. Voluptatem
                                    neque reprehenderit perspiciatis fugiat illum. Fugiat quos, aspernatur corrupti
                                    doloribus esse voluptatibus.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, facilis! Nesciunt
                                    molestiae eum, consequatur exercitationem, iste nihil sit, magni quo molestias
                                    recusandae suscipit facere in consectetur adipisci voluptatum nulla quas?
                                </p>
                                <a href="#" class="btn btn-success">Selesai</a>
                                <a href="#" class="btn btn-danger">Belum</a>
                            </div>
                            <div class="mx-auto">
                                <iframe src="{{ asset('img/cv.pdf') }}" width="447px" height="390px"
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
