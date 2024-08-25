{{-- membuat main --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Doly Gurning">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/css/button.css" rel="stylesheet">
    {{-- CSS untuk tabel --}}
    <link href="{{ asset('assets/css/border.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    {{-- end CSS untuk tabel --}}
    <link rel="icon" href="/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">

    <title>Dashboard</title>

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
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        .media {
            align-items: flex-start;
        }

        .media-body {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 10px;
        }

        .media+.media {
            margin-top: 15px;
        }

        .card-header,
        .card-footer {
            background-color: #007bff;
            color: white;
        }
    </style>
    <style>
        /* Gaya untuk layar desktop (default) */
        #sidebarMenu .container.position-sticky {
            height: 80%;
        }

        /* Gaya untuk layar mobile (maksimal 768px) */
        @media (max-width: 768px) {
            #sidebarMenu .container.position-sticky {
                height: 78%;
            }
        }

        @media (max-width: 767.98px) {

            /* Ukuran layar mobile */
            #sidebarMenu img {
                width: 25%;
            }
        }

        @media (min-width: 768px) {

            /* Ukuran layar desktop */
            #sidebarMenu img {
                width: 40%;
            }
        }
    </style>

    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

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

    <script src="/js/modal.js"></script>
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

    <script>
        function ShowPDF(pdfUrl) {
            document.getElementById('modalPdf').src = pdfUrl;

        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua elemen dengan kelas 'user-name'
            var userNameElements = document.querySelectorAll('.user-name');

            // Function untuk memperbarui nama berdasarkan ukuran layar
            function updateUserNames() {
                userNameElements.forEach(function(userNameElement) {
                    var fullName = userNameElement.getAttribute('data-full-name') || userNameElement
                        .innerText;
                    userNameElement.setAttribute('data-full-name', fullName);

                    if (window.innerWidth < 768) {
                        var firstName = fullName.split(' ')[0]; // Ambil kata pertama (nama depan)
                        userNameElement.innerText = firstName;
                    } else {
                        userNameElement.innerText =
                            fullName; // Tampilkan nama lengkap jika layar lebih besar dari 768px
                    }
                });
            }

            // Panggil fungsi pertama kali saat halaman dimuat
            updateUserNames();

            // Panggil fungsi setiap kali ukuran jendela berubah
            window.addEventListener('resize', updateUserNames);
        });
    </script>


    {{-- JS untuk tabel --}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    {{-- end JS untuk tabel --}}
    {{-- <!-- Bootstrap JavaScript (Versi jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Atau jika Anda menggunakan Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}



</body>

</html>
