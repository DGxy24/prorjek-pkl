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
            <strong>Tiket ID: tiket_id</strong>
        </div>
        <div class="card-body">
            <!-- Chat antara user dan admin -->
            <div class="media mb-3 d-flex align-items-center">
                <img src="/img/profile-user.png" class="rounded-circle" alt="User Avatar" width="40" height="40">
                <div class="media-body ml-3">
                    <h5 class="mt-0">nama_user</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit excepturi exercitationem mollitia
                        architecto vitae praesentium similique delectus beatae ad doloribus error, libero quia eius, hic
                        asperiores illum, suscipit veniam deserunt!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, accusamus laborum cumque omnis error
                        explicabo quasi ipsum nesciunt esse, repellat inventore consequuntur velit magni ex eos
                        necessitatibus in earum animi.</p>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#pdfModal">
                        <i class="bi bi-filetype-pdf"></i>
                    </button>
                </div>
            </div>
            <div class="media mb-3 d-flex align-items-center">
                <img src="/img/profile-user.png" class="rounded-circle" alt="Admin Avatar" width="40" height="40">
                <div class="media-body ml-3">
                    <h5 class="mt-0">nama_admin</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit excepturi exercitationem mollitia
                        architecto vitae praesentium similique delectus beatae ad doloribus error, libero quia eius, hic
                        asperiores illum, suscipit veniam deserunt!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, accusamus laborum cumque omnis error
                        explicabo quasi ipsum nesciunt esse, repellat inventore consequuntur velit magni ex eos
                        necessitatibus in earum animi.</p>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#pdfModal">
                        <i class="bi bi-filetype-pdf"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-danger btn-sm"><span data-feather="eye"><i class="bi bi-envelope"></i></span> Kirim Pesan</a>
        </div>
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
