{{-- membuat index --}}

@extends('dashboard-admin.layout.main')

@section('container')

{{-- {{ dd($bagian) }} --}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Admin<h1>
    </div>
    <p>Total Tiket = {{ $tiket }}</p>

    <div class="container">
        <div class="col-md-12">
            <h4>Bar Chart Bidang</h4>
            <canvas id="barchartBidang" style="width: 100%;"></canvas>
        </div>
     
           
            <div class="col-md-12">
                <h4>Bar Chart Jenis Masalah</h4>
                <canvas id="barchartMasalah" style="width: 100%;"></canvas>
            
        </div>
    </div>
    <script>
        // bar chart bidang
var ctx = document.getElementById("barchartBidang").getContext("2d");
// var bagian = {!! json_encode($bagian->toArray()) !!};
var barchartBidang = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            @foreach($bagian as $item)
            "{{ $item->nama_bagian }}",
        @endforeach
        ],
        datasets: [
            {
                label: "Jumlah Tiket",
                // Jika Bagian ditambah, jangan lupa menambahkan variabelnya kesini juga
                data: [{{ $bagian1 }},{{ $bagian2 }},{{ $bagian3 }},{{ $bagian4 }},
                {{ $bagian5 }},{{ $bagian6 }},{{ $bagian7 }},{{ $bagian8 }},{{ $bagian9 }},
                ], 
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 2,
            },
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
//  end bar chart bidang

// barchart masalah
var ctx = document.getElementById("barchartMasalah").getContext("2d");
var barchartMasalah = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            @foreach($masalah as $item)
            "{{ $item->jenis_masalah }}",
        @endforeach
        ],
        datasets: [
            {
                
                label: "Jumlah Tiket",
                // Jika jenis masalah ditambah, jangan lupa menambahkan variabelnya kesini juga
                data: [{{ $masalah1 }},{{ $masalah2 }},{{ $masalah3 }},{{ $masalah4 }},
                {{ $masalah5 }},{{ $masalah6 }},{{ $masalah7 }},{{ $masalah8 }},
                {{ $masalah9 }},
                ], 
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderColor: "rgba(255, 99, 132, 1)",
                borderWidth: 2,
            },
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
// end barchart masalah

    </script>
@endsection


