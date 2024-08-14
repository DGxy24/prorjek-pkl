{{-- membuat menu tabel tiket dan modal tiket --}}
{{-- {{ dd($tiket) }} --}}
@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Proses</h1>
    </div>

    <div class="table-responsive table-bordered w-100">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Permasalah</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Bukti</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>IT</td>
                    <td>System Down</td>
                    <td>Restarted server</td>
                    <td>
                        {{-- <a href="{{ asset('img/cv.pdf') }}"> pdf</a> --}}
                        {{-- <div class="row justify-content-center">
                            <iframe src="{{ asset('img/cv.pdf') }}" width="50%" height="600">
                                Silahkan Download PDF<a href="{{ asset('img/cv.pdf') }}">Download PDF</a>
                            </iframe>
                        </div> --}}
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#pdfModal">
                            <i class="bi bi-filetype-pdf"></i>
                        </button>
                    </td>
                    <td>
                        <a href="/dashboard/tiket-proses/selesai" class="btn btn-info btn-sm"><span data-feather="eye"><i
                                    class="bi bi-envelope-open"></i></span></a>

                        {{-- <a href="#" class="badge bg-warning"><span data-feather="edit">Edit</span></a>
                  <form class="d-inline" action="" method="POST">
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete<span
                              data-feather="x-circle"></span></button>
                  </form> --}}
                    </td>
                </tr>
            </tbody>
        </table>
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
@section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection
