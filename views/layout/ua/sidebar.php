<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link d-flex">
        <img src="<?= $base_url; ?>assets/images/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-bold text-md">SIDEBA <?= ($_SESSION['role'] == 1) ? '- Administrator' : ''; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="<?= $base_url; ?>assets/bootstrap/dist/img/dummy.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $row_data['nama']; ?></a>
                <span class="text-muted text-sm"><?= $row_data['nik']; ?></span>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if ($_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>admin" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>admin/penduduk" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Penduduk
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Data Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>admin/sktm" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan <br> Tidak Mampu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>admin/skkb" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan <br> Kelakuan Baik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>admin/sku" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan Usaha</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>admin/bantuan" class="nav-link">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p>
                            Data Bantuan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>admin/vaksin" class="nav-link">
                        <i class="nav-icon fas fa-syringe"></i>
                        <p>
                            Data Vaksin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>admin/profile" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Ubah Profil
                        </p>
                    </a>
                </li>
                <?php else : ?>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>user" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Data Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>user/sktm" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan <br> Tidak Mampu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>user/skkb" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan <br> Kelakuan Baik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $base_url; ?>user/sku" class="nav-link d-flex align-items-center">
                                <i class="fas fa-arrow-right nav-icon text-xs"></i>
                                <p class="text-sm">Surat Keterangan Usaha</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>user/profile" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Ubah Profil
                        </p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>