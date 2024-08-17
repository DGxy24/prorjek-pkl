{{-- membuat index --}}

@extends('dashboard-admin.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Admin<h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Bar Chart Bidang</h4>
                <canvas id="barchartBidang" style="width: 100%;"></canvas>
            </div>
            <div class="col-md-6">
                <h4>Bar Chart Jenis Masalah</h4>
                <canvas id="barchartMasalah" style="width: 100%;"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/barchart.js') }}"></script>
@endsection
