{{-- membuat menu tabel tiket masuk dan modal tiket --}}

@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Proses</h1>
    </div>

    <div class="table-responsive table-bordered w-100">
        <table class="table table-striped table-sm">
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

                        @if ($item->proses_table == null )
                        <td>
                            {{-- menuju form tindak lanjut  --}}
                            <a href="/dashboard-admin/tiket/proses/{{ $item->id }} " class="btn btn-danger btn-sm"
                                role="button"><span data-feather="edit"><i class="bi bi-pencil-square"></i></span></a>

                        </td>
                        @else
                        <td>
                            {{-- menuju form view modal --}}
                            <a href="/dashboard-admin/tiket/proses " class="btn btn-success btn-sm"
                                role="button"><span data-feather="edit"><i class="bi bi-pencil-square"></i></span></a>

                        </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
