<?php
include 'app/conn.php';
include 'base_url.php';
include 'views/layout/admin/header.php';
include 'views/layout/admin/navbar.php';
include 'views/layout/admin/sidebar.php';
?>

<div class="content-wrapper">
    <?php
    if (isset($_GET['views_admin']) && $_GET['views_admin'] == "admin") {
        include 'views/page/admin/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "penduduk") {
        include 'views/page/admin/penduduk/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "create_penduduk") {
        include 'views/page/admin/penduduk/create.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "bantuan") {
        include 'views/page/admin/data_bantuan.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "profile") {
        include 'views/page/admin/profile.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "password") {
        include 'views/page/admin/password.php';
    } else {
        include 'views/page/admin/index.php';
    }
    ?>
</div>

<?php
include 'views/layout/admin/footer.php';
?>