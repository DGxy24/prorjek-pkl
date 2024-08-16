{{-- membuat menu tabel tiket masuk dan modal tiket --}}

@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Masuk</h1>
    </div>

    <div class="table-responsive table-bordered w-100">
        <table class="table table-striped table-sm">
            <thead>
                <tr>

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
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="showTicketDetails('{{ $item->id }}','{{ $item->created_at->translatedformat('l-d F Y') }}','{{ $item->bagian->nama_bagian }}', '{{ $item->permasalahan->jenis_masalah }}', '{{ $item->penjelasan }}', '{{ $item->tindakan }}');
                                status();
                                ">

                                <span data-feather="eye"><i class="bi bi-eye-fill"></i></span>
                            </button>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal -->
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
                            <th>Tanggal Lapor</th>
                            <td id="modalTanggalLapor"></td>
                        </tr>
                        <tr>
                            <th>Nama Bagian</th>
                            <td id="modalNamaBagian"></td>
                        </tr>
                        <tr>
                            <th>Permasalah</th>
                            <td id="modalPermasalah"></td>
                        </tr>
                        <tr>
                            <th>Penjelasan</th>
                            <td id="modalPenjelasan"></td>
                        </tr>
                        <tr>
                            <th>Tindakan</th>
                            <td id="modalTindakan"></td>
                        </tr>
                    </table>
                </div>

                <div class="modal-footer">
                    <form id="link_terima" method="POST">
                        @method('PUT')
                        @csrf
                        <button class="btn btn-success" type="submit">Setuju</button>
                    </form>

                    <form id="link_tolak" method="POST">

                        @csrf
                        <button class="btn btn-danger" type="submit">Tolak</button>

                    </form>
                    {{-- 
                    <a id="link_tolak" href="#" type="button" class="btn btn-danger">Tolak</a> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>
@endsection
