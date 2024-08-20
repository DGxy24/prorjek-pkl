{{-- membuat menu menejemen users --}}

@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Menejemen Admin</h1>
        <a class="btn btn-primary" href="/dashboard-admin/user/create" role="button"><i class="bi bi-person-fill-add"></i></a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($akun as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td>{{ $item->email }}</td>
                        <td>********</td>
                        <td>
                            <a href="/dashboard-admin/user/{{ $item->id }}/edit " class="btn btn-warning btn-sm"
                                role="button"><span data-feather="edit"><i class="bi bi-pencil-square"></i></span></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm">
                        <tr>
                            <th>Nama</th>
                            <td id="modalNama"></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td id="modalUsername"></td>
                        </tr>
                        <tr>
                            <th>Bagian</th>
                            <td id="modalBagian"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td id="modalEmail"></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td id="modalPassword"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
