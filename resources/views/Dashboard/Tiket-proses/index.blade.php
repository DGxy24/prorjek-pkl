{{-- membuat menu tabel tiket dan modal tiket --}}
{{-- {{ dd($tiket) }} --}}
@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Proses</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Tanggal Lapor</th>
                    <th scope="col">Nama Bagian</th>
                    <th scope="col">Permasalah</th>
                    <th scope="col">Penjelasan</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                {{-- {{ dd($tiket[0]->proses_table) }} --}}
                @foreach ($tiket as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->created_at->translatedformat('l-d-M-Y') }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td>{{ $item->permasalahan->jenis_masalah }}</td>
                        <td>{{ $item->penjelasan }}</td>
                        <td>{{ $item->tindakan }}</td>


                        @if ($item->proses_table == null)
                            <td>
                                <a class="btn btn-danger btn-sm"><span data-feather="eye"><i
                                            class="bi bi-envelope"></i></span></a>
                            </td>
                        @elseif($item->proses_table != null)
                            @if ($item->proses_table->status == 2)
                                {{-- Masukan kolom/td untuk tombol cek balasan user --}}
                                <td>
                                    <a href="/dashboard/tiket-proses/{{ $item->id }}/lihat"
                                        class="btn btn-warning btn-sm"><span data-feather="eye"><i
                                                class="bi bi-pencil"></i></span></a>
                                </td>
                            @elseif($item->proses_table->status == 0)
                                <td>
                                    <a href="/dashboard/tiket-proses/{{ $item->id }}"
                                        class="btn btn-success btn-sm"><span data-feather="eye"><i
                                                class="bi bi-envelope-open"></i></span></a>
                                </td>
                            @endif
                        @endif


                    </tr>
                @endforeach
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
