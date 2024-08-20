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

    <h3 class="h2">Persentasi Tiket<h3>
            <canvas id="barchartTiket" style="width: 100%;"></canvas>
            <div class="mt-3"></div>

            <script>
                var ctx = document.getElementById("barchartTiket").getContext("2d");
                var barchartTiket = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: ["Diajukan", "Dalam Proses", "Ditolak", "Selesai"], // Hanya satu bagian
                        datasets: [{
                            label: "Jumlah Tiket",
                            data: [10, 8, 2, 5], // Data untuk satu masalah saja
                            backgroundColor: [
                                "rgba(54, 162, 235, 0.5)", // Biru untuk Diajukan
                                "rgba(255, 205, 86, 0.5)", // Kuning untuk Dalam Proses
                                "rgba(255, 99, 132, 0.5)", // Merah untuk Ditolak
                                "rgba(75, 192, 192, 0.5)" // Hijau untuk Selesai
                            ],
                            borderColor: [
                                "rgba(54, 162, 235, 1)", // Biru untuk Diajukan
                                "rgba(255, 205, 86, 1)", // Kuning untuk Dalam Proses
                                "rgba(255, 99, 132, 1)", // Merah untuk Ditolak
                                "rgba(75, 192, 192, 1)" // Hijau untuk Selesai
                            ],
                            borderWidth: 3,
                        }],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
            </script>
        @endsection
