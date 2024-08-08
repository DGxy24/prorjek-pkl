{{-- membuat menu tabel tiket dan modal tiket --}}

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
                    <th scope="col">Nama Bagian</th>
                    <th scope="col">Permasalah</th>
                    <th scope="col">Penjelasan</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>IT</td>
                    <td>System Down</td>
                    <td>Server is not responding</td>
                    <td>Restarted server</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            onclick="showTicketDetails('1234', 'IT', 'System Down', 'Server is not responding', 'Restarted server')">
                            <span data-feather="eye">Lihat</span>
                        </button>
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
                    <button type="button" class="btn btn-primary">Selesai</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
