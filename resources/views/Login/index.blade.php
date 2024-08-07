<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <div class="navbar navbar-dark" style="background:#7DA3A1;">
            <div class="container p-3">
                <!-- Optional content for the navbar -->
            </div>
        </div>
    </header>

    @if(session()->has('loginError'))
    {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    --}}
 <script>
    Swal.fire({
        icon: "error",
        title: "Login Error",
        text: "Username atau Password Anda Salah",
        footer: '<p>Belum Punya Akun? <a href="/daftar">DAFTAR</a></p>'
      });
    </script>
    </div>

    @endif
    <div class="container">
        <main class="form-signin">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <form action="{{ route('login')}}" method="POST">
                        @csrf
                        
                            {{--  <input type="telp" class="form-control @error('no_hp') is-invalid
                        @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                        @enderror --}}

                        <div class="text-center mt-3">
                            <a href="/">
                            <img class="mb-4" src="/img/logo.png" alt="Logo" width="20%">
                        </a>
                            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('username') is-invalid
                        @enderror" id="username" name="username" value="{{ old('username') }}" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control  @error('password') is-invalid
                        @enderror" id="password" name="password" value="{{ old('password') }}" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
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
