{{-- membuat index --}}

@extends('dashboard-admin.layout.main')

@section('container')
    {{-- {{ dd($bagian) }} --}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Admin<h1>
    </div>

    <div class="row mb-4">
        <!-- Card Jumlah Tiket -->
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Tiket</h5>
                            <h3 class="card-text" id="totalTickets">{{ $tiket }}</h3>
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
            <div class="card text-white bg-success">
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
            </div>
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

            <div class="container">
                <div class="col-md-12">
                    <h4> Bidang</h4>
                    <canvas id="barchartBidang" style="width: 100%;"></canvas>
                </div>
                <div class="mt-3"></div>
                <div class="col-md-12">
                    <h4> Jenis Masalah</h4>
                    <canvas id="barchartMasalah" style="width: 100%;"></canvas>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("barchartTiket").getContext("2d");
                var barchartTiket = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: ["Diajukan", "Dalam Proses", "Ditolak", "Selesai"], // Hanya satu bagian
                        datasets: [{
                            label: "Jumlah Tiket",
                            data: [{{ $ajukan }}, {{ $proses }}, {{ $tolak }}, {{ $terima }}], // Data untuk satu masalah saja
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
            <script>
                // bar chart bidang
                var ctx = document.getElementById("barchartBidang").getContext("2d");
                // var bagian = {!! json_encode($bagian->toArray()) !!};
                var barchartBidang = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: [
                            @foreach ($bagian as $item)
                                "{{ $item->nama_bagian }}",
                            @endforeach
                        ],
                        datasets: [{
                            label: "Jumlah Tiket",
                            // Jika Bagian ditambah, jangan lupa menambahkan variabelnya kesini juga
                            data: [{{ $bagian1 }}, {{ $bagian2 }}, {{ $bagian3 }},
                                {{ $bagian4 }},
                                {{ $bagian5 }}, {{ $bagian6 }}, {{ $bagian7 }},
                                {{ $bagian8 }}, {{ $bagian9 }},
                            ],
                            backgroundColor: "rgba(72, 189, 58, 0.5)",
                            borderColor: "rgba(72, 189, 58, 1)",
                            borderWidth: 2,
                        }, ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
                //  end bar chart bidang

                // barchart masalah
                var ctx = document.getElementById("barchartMasalah").getContext("2d");
                var barchartMasalah = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: [
                            @foreach ($masalah as $item)
                                "{{ $item->jenis_masalah }}",
                            @endforeach
                        ],
                        datasets: [{

                            label: "Jumlah Tiket",
                            // Jika jenis masalah ditambah, jangan lupa menambahkan variabelnya kesini juga
                            data: [{{ $masalah1 }}, {{ $masalah2 }}, {{ $masalah3 }},
                                {{ $masalah4 }},
                                {{ $masalah5 }}, {{ $masalah6 }}, {{ $masalah7 }},
                                {{ $masalah8 }},
                                {{ $masalah9 }},
                            ],
                            backgroundColor: "rgba(255, 72, 20, 0.5)",
                            borderColor: "rgba(255, 72, 20, 1)",
                            borderWidth: 2,
                        }, ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
                // end barchart masalah
            </script>
        @endsection
