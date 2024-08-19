{{-- membuat index --}}

@extends('dashboard.layout.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Apa kendala hari ini.<h1>
            <p> ini variabel total: {{ $total }}</p>
    </div>
@endsection
