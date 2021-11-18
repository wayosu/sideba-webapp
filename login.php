<?php 
    session_start();
    include 'base_url.php';

    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == 1) {
            header('Location: '. $base_url .'admin');
            return false;
        } else {
            header('Location: '. $base_url .'user');
            return false;
        }
    }

    include 'app/conn.php';
    include 'app/check_login.php'; 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icon -->
    <link rel="icon" href="<?= $base_url; ?>assets/images/logo.png" type="image/png" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/style.css">
    <title>Sistem Informasi Desa Berlian</title>
</head>

<body>
    <div class="spacer"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4">
                <div class="text-center">
                    <img src="<?= $base_url; ?>assets/images/logo.png" alt="logo" width="65">
                    <h1 class="mt-3">SIDEBA</h1>
                    <p class="fs-4">Sistem Informasi Desa Berlian</p>
                    <h1 class="h5 mb-3 fw-normal">Log In</h1>
                </div>
                <form action="" method="post">
                    <div class="form-floating my-2">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" name="auth" class="w-100 btn btn-lg submit-btn" type="submit">Login</button>
                </form>
                <div class="text-center">
                    <p class="mt-5 mb-3"><a href="<?= $base_url; ?>" class="text-muted text-decoration-none text-center small">Kembali ke home</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>