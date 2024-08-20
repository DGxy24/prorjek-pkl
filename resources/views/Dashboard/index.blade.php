{{-- membuat index --}}

@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Apa kendala hari ini.🎟️<h1>
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
                var barchartMasalah = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: ["Masalah 1", "Masalah 2", "Masalah 3", "Masalah 4", "Masalah 5", "Masalah 6", "Masalah 7",
                            "Masalah 8", "Masalah 9"
                        ],
                        datasets: [{
                                label: "Jumlah Tiket Diajukan",
                                data: [10, 15, 20, 25, 30, 35, 40, 45, 50],
                                backgroundColor: "rgba(54, 162, 235, 0.5)", // Biru
                                borderColor: "rgba(54, 162, 235, 1)",
                                borderWidth: 2,
                            },
                            {
                                label: "Jumlah Tiket Dalam Proses",
                                data: [8, 12, 18, 22, 28, 33, 38, 42, 48],
                                backgroundColor: "rgba(255, 205, 86, 0.5)", // Kuning
                                borderColor: "rgba(255, 205, 86, 1)",
                                borderWidth: 2,
                            },
                            {
                                label: "Jumlah Tiket Ditolak",
                                data: [2, 3, 4, 5, 6, 7, 8, 9, 10],
                                backgroundColor: "rgba(255, 99, 132, 0.5)", // Merah
                                borderColor: "rgba(255, 99, 132, 1)",
                                borderWidth: 2,
                            },
                            {
                                label: "Jumlah Tiket Selesai",
                                data: [5, 10, 15, 20, 25, 30, 35, 40, 45],
                                backgroundColor: "rgba(75, 192, 192, 0.5)", // Hijau
                                borderColor: "rgba(75, 192, 192, 1)",
                                borderWidth: 2,
                            }
                        ],
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
