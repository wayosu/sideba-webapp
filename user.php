<?php
session_start();
include 'base_url.php';

if (!isset($_SESSION['email'])) {
    ?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>login';
    </script>
<?php
    return false;
}

if ($_SESSION['role'] != 0) {
    header('Location: '. $base_url .'admin');
    return false;
}

include 'app/conn.php';
include 'app/get_data.php';
include 'views/layout/ua/header.php';
include 'views/layout/ua/navbar.php';
include 'views/layout/ua/sidebar.php';
?>

<div class="content-wrapper">
    <?php
    if (isset($_GET['views_user']) && $_GET['views_user'] == "user") {
        include 'views/page/user/index.php';
    } else if (isset($_GET['views_user']) && $_GET['views_user'] == "profile") {
        include 'views/page/user/profile.php';
    } else if (isset($_GET['views_user']) && $_GET['views_user'] == "password") {
        include 'views/page/user/password.php';
    } else if (isset($_GET['views_user']) && $_GET['views_user'] == "sktm") {
        include 'views/page/user/sktm/index.php';
    } else if (isset($_GET['views_user']) && $_GET['views_user'] == "skkb") {
        include 'views/page/user/skkb/index.php';
    } else if (isset($_GET['views_user']) && $_GET['views_user'] == "sku") {
        include 'views/page/user/sku/index.php';
    } else {
        include 'views/page/user/index.php';
    }
    ?>
</div>

<?php
include 'views/layout/ua/footer.php';
?>