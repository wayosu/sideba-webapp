<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="navbar-brand dropdown-toggle d-flex align-items-center" data-toggle="dropdown" href="#">
                <img src="<?= $base_url; ?>assets/bootstrap/dist/img/dummy.jpg" alt="image" class="rounded-circle" width="30">
                <p class="mb-1 mx-3 text-black font-weight-lighter text-md d-none d-md-block"><?= $row_data['nama']; ?></p>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?= $base_url; ?>logout" class="dropdown-item text-sm" onclick="return confirm('Anda yakin keluar dari halaman ini?')">
                    <div class="d-flex align-items-center">
                        <div class="text-teal">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <span class="ml-2">Logout</span>
                    </div>
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->