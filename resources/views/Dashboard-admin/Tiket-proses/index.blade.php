{{-- membuat menu tabel tiket masuk dan modal tiket --}}

@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Proses</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{-- {{ dd($tiket[0]->proses) }} --}}
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Tanggal Lapor</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Permasalah</th>
                    <th scope="col">Penjelasan</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tiket as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->created_at->translatedformat('l-d-M-Y') }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td>{{ $item->permasalahan->jenis_masalah }}</td>
                        <td>{{ $item->penjelasan }}</td>
                        <td>{{ $item->tindakan }}</td>
                        {{-- <script>
                            var id_tiket;
                            id_tiket={{ $item->id }};
                            var link_t = "/dashboard-admin/tiket/"+id_tiket+"/edit";
                        </script> --}}

                        @if ($item->proses_table == null)
                            <td>
                                {{-- menuju form tindak lanjut  --}}
                                <a href="/dashboard-admin/tiket/proses/{{ $item->id }} " class="btn btn-danger btn-sm"
                                    role="button"><span data-feather="edit"><i class="bi bi-pencil-square"></i></span></a>

                            </td>
                        @else
                            <td>
                                {{-- menuju form view modal --}}

                                <a href="#" class="btn btn-success btn-sm" role="button" data-bs-toggle="modal"
                                    data-bs-target="#tindakLanjutModal" data-pdf-url="{{ $item->pdf_url }}">
                                    <i class="bi bi-eye"></i>
                                </a>

                            </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal Tindak Lanjut -->
    <div class="modal fade" id="tindakLanjutModal" tabindex="-1" aria-labelledby="tindakLanjutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tindakLanjutModalLabel">Tindak Lanjut</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Tindak Lanjut -->
                    <form action="/dashboard-admin/tiket/proses" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tiket_id" name="tiket_id" placeholder="ID Tiket"
                                readonly value="">
                            <label for="tiket_id">ID Tiket</label>
                        </div>

                        <div class="mb-3">
                            <label for="tindakan_it" class="form-label">Tindak Lanjut yang dilakukan</label>
                            <textarea id="tindakan_it" name="tindakan_it" class="form-control" readonly></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="pdfViewer" class="form-label">File PDF</label>
                            <iframe id="pdfViewer" src="" width="100%" height="500px" frameborder="0"></iframe>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    {{-- <button type="submit" class="btn btn-warning">Ubah</button> --}}
                    <a class="btn btn-warning" type="submit" href="/dashboard-admin/tiket-proses/edit"
                        role="button">Ubah</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection
