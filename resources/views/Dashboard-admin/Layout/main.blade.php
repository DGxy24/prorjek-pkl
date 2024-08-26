{{-- dashboard main admin --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Doly Gurning">
    {{-- CSS untuk tabel --}}
    <link href="{{ asset('assets/css/border.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    {{-- end CSS untuk tabel --}}
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/sidebar-admin.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <link rel="icon" href="/img/logo.png">
    <title>Dashboard</title>

    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    {{-- <script src="/js/dashboard.js"></script> --}}
    <script src="/js/modal.js"></script>
    {{-- untuk mengambil data dari tabel --}}

    {{-- barchat js --}}
    <script src="/js/barchart.js"></script>

    <script>
        var tiket;
        var tanda;

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

        function showTicketDetails(id, nama, tanggal, bagian, masalah, penjelasan, tindakan) {
            tiket = id;
            document.getElementById('modalTicketId').textContent = id;
            document.getElementById('modalTicketNama').textContent = nama;
            document.getElementById('modalTanggalLapor').textContent = tanggal;
            document.getElementById('modalNamaBagian').textContent = bagian;
            document.getElementById('modalPermasalah').textContent = masalah;
            document.getElementById('modalPenjelasan').textContent = penjelasan;
            document.getElementById('modalTindakan').textContent = tindakan;

            // var id;
            // document.getElementById('modalTicketId').textContent = id;
        }

        function status() {

            var terima = "/dashboard-admin/tiket/masuk/" + tiket;
            var tolak = "/dashboard-admin/tiket/masuk/" + tiket + "/tolak";
            document.getElementById('link_terima').action = terima;
            document.getElementById('link_tolak').action = tolak;
        }
    </script>

    <script>
        // Fungsi untuk mengatur URL PDF
        function setPdfSource(pdfUrl) {
            var pdfViewer = document.getElementById('pdfViewer');
            pdfViewer.src = "/img/cv.pdf";;
        }

        // Event listener untuk membuka modal
        document.addEventListener('DOMContentLoaded', function() {
            var modalElement = document.getElementById('tindakLanjutModal');
            modalElement.addEventListener('show.bs.modal', function(event) {
                // Ambil data dari tombol atau sumber lain untuk menentukan URL PDF
                var button = event.relatedTarget;
                var pdfUrl = button.getAttribute('data-pdf-url');
                setPdfSource(pdfUrl);
            });
        });
    </script>

    <script>
        function showTicketProses(id, tindakan, pdfUrl) {
            tanda = id;
            document.getElementById('modalTicketId').textContent = id;
            document.getElementById('modalTindakan').textContent = tindakan;
            document.getElementById('modalPdf').src = pdfUrl;
        }

        function edit_proses() {
            var link = "/dashboard-admin/tiket/proses/" + tanda + "/edit";
            document.getElementById('link_edit').href = link;

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





</body>

</html>
