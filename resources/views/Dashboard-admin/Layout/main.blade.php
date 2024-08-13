{{-- dashboard main admin --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Doly Gurning">

    <title>Dashboard</title>


    <link rel="icon" href="img/logo.png">


    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="icon" href="/img/logo.png">

</head>

<body>

    @include('dashboard-admin.layout.header')
    <div class="container-fluid">
        <div class="row">
            @include('dashboard-admin.layout.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('container')



            </main>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="/js/dashboard.js"></script>
    {{-- untuk mengambil data dari tabel --}}
    <script>
        function showUsers(nama, username, bagian, email, password) {
            document.getElementById('modalNama').textContent = nama;
            document.getElementById('modalUsername').textContent = username;
            document.getElementById('modalBagian').textContent = bagian;
            document.getElementById('modalEmail').textContent = email;
            document.getElementById('modalPassword').textContent = password;
        }

        function showAdmins(nama, username, bagian, email, password) {
            document.getElementById('modalNama').textContent = nama;
            document.getElementById('modalUsername').textContent = username;
            document.getElementById('modalBagian').textContent = bagian;
            document.getElementById('modalEmail').textContent = email;
            document.getElementById('modalPassword').textContent = password;
        }

        function showTicketDetails(id, tanggal, bagian, masalah, penjelasan, tindakan) {
            document.getElementById('modalTicketId').textContent = id;
            document.getElementById('modalTanggalLapor').textContent = tanggal;
            document.getElementById('modalNamaBagian').textContent = bagian;
            document.getElementById('modalPermasalah').textContent = masalah;
            document.getElementById('modalPenjelasan').textContent = penjelasan;
            document.getElementById('modalTindakan').textContent = tindakan;
        }
    </script>
</body>

</html>
