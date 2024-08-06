<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">
    <title>Pengadilan Negeri Medan</title>
</head>

<body class="color">

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success')}}
    </div>
    @endif
    
    <div class="px-4 py-5 my-5 text-center"style="color:#ffffff">
        <img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="13%">
        <h1 class="display-5 fw-bold">SELAMAT DATANG DI APLIKASI
            <br> PENGELOLAAN KELUHAN IT
            <br>PENGADILAN NEGERI MEDAN
        </h1>
        <div class="col-lg-6 mx-auto mt-5">

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/login"class="btn  btn-lg px-4 gap-3 me-3 " style="background:#324851; color:white">LOGIN</a>
                <a href="/daftar" class="btn  btn-lg px-4 "style="background:#324851; color:white">SIGN UP</a>
            </div>
        </div>
    </div>



</body>

</html>
