{{-- membuat main --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Doly Gurning">
    <style>
        /* Menyembunyikan toolbar pada editor */
        trix-toolbar {
            display: none;
        }

        /* Menyembunyikan bagian lain dari editor jika diperlukan */
        trix-editor {
            border: none;
            /* Menyembunyikan border jika tidak diinginkan */
            padding: 0;
            /* Menyembunyikan padding jika tidak diinginkan */
        }
    </style>
    <title>Dashboard</title>



    <link rel="icon" href="img/logo.png">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">


    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>

    @include('dashboard.layout.header')
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layout.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('container')



            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="/js/dashboard.js"></script>
    {{-- untuk mengambil data dari tabel --}}
    <script>
        function showTicketDetails(id, tanggal, bagian, masalah, penjelasan, tindakan) {
            document.getElementById('modalTicketId').textContent = id;
            document.getElementById('modalTanggalLapor').textContent = tanggal;
            document.getElementById('modalNamaBagian').textContent = bagian;
            document.getElementById('modalPermasalah').textContent = masalah;
            document.getElementById('modalPenjelasan').textContent = penjelasan;
            document.getElementById('modalTindakan').textContent = tindakan;
        }

        function showTicketSelesai(id, tanggal, bagian, masalah, tindakan, bukti) {
            document.getElementById('modalTicketId').textContent = id;
            document.getElementById('modalTanggalLapor').textContent = tanggal;
            document.getElementById('modalNamaBagian').textContent = bagian;
            document.getElementById('modalPermasalah').textContent = masalah;
            document.getElementById('modalTindakan').textContent = tindakan;
            document.getElementById('modalBukti').textContent = bukti;
        }

        function showTicketAjukan(id, bagian, masalah, penjelasan, tindakan) {
            document.getElementById('modalTicketId').textContent = id;
            // document.getElementById('modalTanggalLapor').textContent = tanggal;
            document.getElementById('modalNamaBagian').textContent = bagian;
            document.getElementById('modalPermasalah').textContent = masalah;
            document.getElementById('modalPenjelasan').textContent = penjelasan;
            document.getElementById('modalTindakan').textContent = tindakan;
        }
    </script>
</body>

</html>
