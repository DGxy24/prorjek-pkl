<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration Form</title>
</head>

<body>
    <header>
        <div class="navbar navbar-dark" style="background:#7DA3A1;">
            <div class="container p-3">
                <!-- Optional content for the navbar -->
            </div>
        </div>
    </header>
    <div class="container">
        <main class="form-signin">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <form>
                        <div class="text-center mt-3">
                            <img class="mb-4" src="/img/logo.png" alt="Logo" width="10%">
                            <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFullName" placeholder="Nama Lengkap">
                            <label for="floatingFullName">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example">
 
                                
                                <option selected>Pilih Bidang/Bagian</option>
                                @foreach ($bagian as $item)
                                <option value="{{ $item->id }}" >{{ $item ->nama_bagian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail"
                                placeholder="name@example.com">
                            <label for="floatingEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMN6XT5N4PLnY9Alj6LpHQK0y07zopBh7m9VL6M2YE7m6PWb7GVVRa4u/dEmf2yO" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGcueS42HI5yy1y8u3VnK4Ylfd1En9YKrjwWQG8K/3KzjST6fBf4dIhSETV" crossorigin="anonymous">
    </script>
</body>

</html>
