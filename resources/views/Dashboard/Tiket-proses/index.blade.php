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
                    <th scope="col">Nama Bagian</th>
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
                    <td><a href="{{ asset('img/cv.pdf') }}"> pdf</a></td>
                    <td>
                        <button class="btn btn-info btn-sm">
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
            </tbody>
        </table>
    </div>
@endsection
