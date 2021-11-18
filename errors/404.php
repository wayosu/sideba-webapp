<?php
session_start();
include '../base_url.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">

    <style>
        .error-page {
            text-align: center;
            background: #fff;
            border-top: 1px solid #eee;
        }

        .error-page .error-inner {
            display: inline-block;
        }

        .error-page .error-inner h1 {
            font-size: 140px;
            text-shadow: 3px 5px 2px #3333;
            color: #20c997;
            font-weight: 700;
        }

        .error-page .error-inner h1 span {
            display: block;
            font-size: 25px;
            color: #333;
            font-weight: 600;
            text-shadow: none;
        }

        .error-page .error-inner p {
            padding: 20px 15px;
        }

        .error-page .search-form .btn {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            cursor: pointer;
            background: #20c997;
            display: inline-block;
            position: relative;
            top: -2px;
            color: #fff;
        }

        .error-page .search-form .btn:hover {
            background: #19a078;
        }
    </style>
</head>

<body>
    <section class="error-page section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <!-- Error Inner -->
                    <div class="error-inner">
                        <h1>404<span>Oop's sorry we can't find that page!</span></h1>
                        <p>We could not find the page you were looking for. Meanwhile, you may return to dashboard.</p>
                        <form class="search-form">
                            <?php
                            if (isset($_SESSION['role'])) {
                                if ($_SESSION['role'] == 1) {
                            ?>
                                    <a href="<?= $base_url; ?>admin" class="btn">Kembali</a>
                                <?php
                                } else {
                                ?>
                                    <a href="<?= $base_url; ?>user" class="btn">Kembali</a>
                                <?php
                                }
                            } else {
                                ?>
                                <a href="<?= $base_url; ?>" class="btn">Kembali</a>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                    <!--/ End Error Inner -->
                </div>
            </div>
        </div>
    </section>
</body>

</html>