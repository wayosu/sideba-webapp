<?php
    include 'base_url.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/png" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/style.css">
    <title>Sistem Informasi Desa Berlian</title>
</head>

<body>
    <?php include 'views/layout/header.php'; ?>

    <main>
        <?php
        if (isset($_GET['views']) && $_GET['views'] == "index") {
            include 'views/page/user/index.php';
        } else if (isset($_GET['views']) && $_GET['views'] == "layanan") {
            include 'views/page/user/layanan.php';
        } else if (isset($_GET['views']) && $_GET['views'] == "umum") {
            include 'views/page/user/layanan_umum.php';
        } else {
            include 'views/page/user/index.php';
        }
        ?>
    </main>

    <?php include 'views/layout/footer.php'; ?>
</body>

</html>