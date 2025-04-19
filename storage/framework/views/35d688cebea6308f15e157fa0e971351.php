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

    <?php if(session()->has('loginError')): ?>
    
 <script>
    Swal.fire({
        icon: "error",
        title: "Login Error",
        text: "Username atau Password Anda Salah",
        footer: '<p>Belum Punya Akun? <a href="/daftar">DAFTAR</a></p>'
      });
    </script>
    </div>

    <?php endif; ?>
    <div class="container">
        <main class="form-signin">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                            

                        <div class="text-center mt-3">
                            <a href="/">
                            <img class="mb-4" src="/img/logo.png" alt="Logo" width="20%">
                        </a>
                            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username" name="username" value="<?php echo e(old('username')); ?>" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                        <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" value="<?php echo e(old('password')); ?>" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                        <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php /**PATH D:\Program\PKL\prorjek-pkl\resources\views//Login/index.blade.php ENDPATH**/ ?>