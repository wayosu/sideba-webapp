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

if ($_SESSION['role'] != 1) {
    header('Location: '. $base_url .'user');
    return false;
}

include 'app/conn.php';
if (isset($_GET['views_admin']) && $_GET['views_admin'] == "cetak_penduduk" || isset($_GET['views_admin']) && $_GET['views_admin'] == "cetak_bantuan" || isset($_GET['views_admin']) && $_GET['views_admin'] == "cetak_vaksin") {
    if ($_GET['views_admin'] == "cetak_penduduk") {
        include 'app/print/cetak_penduduk.php';
    } else if ($_GET['views_admin'] == "cetak_bantuan") {
        include 'app/print/cetak_bantuan.php';
    } else if ($_GET['views_admin'] == "cetak_vaksin") {
        include 'app/print/cetak_vaksin.php';
    }

} else {
    include 'app/get_data.php';
    include 'views/layout/ua/header.php';
    include 'views/layout/ua/navbar.php';
    include 'views/layout/ua/sidebar.php';
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
        include 'views/page/admin/bantuan/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "create_bantuan") {
        include 'views/page/admin/bantuan/create.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "vaksin") {
        include 'views/page/admin/vaksin/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "profile") {
        include 'views/page/admin/profile.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "password") {
        include 'views/page/admin/password.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "sktm") {
        include 'views/page/admin/sktm/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "skkb") {
        include 'views/page/admin/skkb/index.php';
    } else if (isset($_GET['views_admin']) && $_GET['views_admin'] == "sku") {
        include 'views/page/admin/sku/index.php';
    } else {
        include 'views/page/admin/index.php';
    }
    ?>
</div>

<?php
    include 'views/layout/ua/footer.php';
}
?>