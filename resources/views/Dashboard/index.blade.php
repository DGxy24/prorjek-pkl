{{-- membuat index --}}

@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Apa kendala hari ini ?🎟️<h1>
                {{-- <p> ini variabel total: {{ $total }}</p> --}}
    </div>

    <div class="row mb-4">
        <!-- Card Jumlah Tiket -->
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Tiket</h5>
                            <h3 class="card-text" id="totalTickets">{{ $total }}</h3>
                            <!-- Ganti dengan jumlah tiket dinamis -->
                        </div>
                        <div class="icon">
                            <i class="bi bi-ticket-perforated-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Akun Pengguna -->
        <div class="col-md-4">
            {{-- <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Akun Pengguna</h5>
                            <h3 class="card-text" id="totalUsers">{{ $akun }}</h3>
                            <!-- Ganti dengan jumlah akun dinamis -->
                        </div>
                        <div class="icon">
                            <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-md-4">
            {{-- <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Akun Pengguna</h5>
                            <h3 class="card-text" id="totalUsers">{{ $akun }}</h3>
                            <!-- Ganti dengan jumlah akun dinamis -->
                        </div>
                        <div class="icon">
                            <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
