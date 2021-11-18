<?php
include 'app/conn.php';
include 'base_url.php';
include 'views/layout/admin/header.php';
include 'views/layout/admin/navbar.php';
include 'views/layout/admin/sidebar.php';
?>

<div class="content-wrapper">
    <?php
    if (isset($_GET['views_user']) && $_GET['views_user'] == "user") {
        include 'views/page/user/index.php';
    } else {
        include 'views/page/user/index.php';
    }
    ?>
</div>

<?php
include 'views/layout/admin/footer.php';
?>