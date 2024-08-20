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
               {{-- {{ dd($tiket[0]->proses_table) }} --}}

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

                                {{-- <a href="#" class="btn btn-success btn-sm" role="button" data-bs-toggle="modal"
                                    data-bs-target="#tindakLanjutModal" data-pdf-url="{{ $item->pdf_url }}">
                                    <i class="bi bi-eye"></i>
                                </a> --}}

                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="showTicketProses('{{ $item->id }}', '{{ $item->proses_table->tindakan }}',
                                     '{{ asset('storage/' . $item->proses_table->bukti) }}');edit_proses();">
                                    <span data-feather="eye"><i class="bi bi-eye"></i></i></span>
                                </button>

                           
                        @endif

                        @if ($item->proses_table != null)
                            @if($item->proses_table->status==2)
                            {{-- Masukan kolom/td untuk tombol cek balasan user --}}
                            tess
                        @else
                        @endif
                            @else

                            @endif
                            </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal Tindak Lanjut -->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ticket Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm">
                        <tr>
                            <th>ID Tiket</th>
                            <td id="modalTicketId"></td>
                        </tr>
                        <tr>
                            <th>Tindakan</th>
                            <td id="modalTindakan"></td>
                        </tr>
                        <tr>
                            <th>File PDF</th>
                            <td>
                                <iframe id="modalPdf" src="" width="100%" height="400px"></iframe>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">

                    <a id="link_edit" class="btn btn-warning"
                        role="button"><span data-feather="edit">Ubah</span></a>
                    {{-- <form id="link_edit" method="POST">
                        @csrf
                        <button class="btn btn-warning" type="submit">Ubah</button>
                    </form> --}}
                    <form id="" method="POST">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection --}}
