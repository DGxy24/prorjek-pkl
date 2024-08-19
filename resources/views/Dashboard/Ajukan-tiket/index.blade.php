@extends('dashboard.layout.main')

@section('container')
    {{-- membuat menu tabel tiket dan modal tiket --}}
    {{-- {{ dd($tiket) }} --}}

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajuka Tiket</h1>
        <a class="btn btn-primary" href="/dashboard/ajukan-tiket/create" role="button">Lapor</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{-- <th>#</th> --}}
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
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->created_at->translatedformat('l-d-M-Y') }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td>{{ $item->permasalahan->jenis_masalah }}</td>
                        <td>{{ $item->penjelasan }}</td>
                        <td>{{ $item->tindakan }}</td>

                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="showTicketDetails('{{ $item->id }}','{{ $item->created_at->translatedformat('l-d F Y') }}','{{ $item->bagian->nama_bagian }}', '{{ $item->permasalahan->jenis_masalah }}', '{{ $item->penjelasan }}', '{{ $item->tindakan }}')">
                                <span data-feather="eye"><i class="bi bi-eye-fill"></i></span>
                            </button>

                            {{-- <a href="#" class="badge bg-warning"><span data-feather="edit">Edit</span></a>
                        <form class="d-inline" action="" method="POST">
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete<span
                                    data-feather="x-circle"></span></button>
                        </form> --}}
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
                    {{-- <button type="button" class="btn btn-primary">Selesai</button> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
