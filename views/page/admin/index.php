<?php
    include 'app/function/admin/function.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-home"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Dashboard</h1>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-blue order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Total Penduduk</h5>
                        <h4 class="text-right"><i class="fa fa-users f-left"></i><span><?= total_penduduk($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-yellow order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Laki-laki</h5>
                        <h4 class="text-right"><i class="fa fa-male f-left"></i><span><?= laki_laki($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-pink order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Perempuan</h5>
                        <h4 class="text-right"><i class="fa fa-female f-left"></i><span><?= perempuan($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-blue order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Jenis Surat</h5>
                        <h4 class="text-right"><i class="fa fa-envelope f-left"></i><span>3</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-green order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Bantuan</h5>
                        <h4 class="text-right"><i class="fa fa-hands-helping f-left"></i><span><?= bantuan($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-green order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Vaksin</h5>
                        <h4 class="text-right"><i class="fa fa-syringe f-left"></i><span><?= vaksin($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Penduduk</h4>
                            <a href="<?= $base_url; ?>admin/penduduk" class="btn btn-sm btn-primary font-weight-bold shadow"><i class="fas fa-list"></i> &nbsp;Selengkapnya</a>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table class="table example2 table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Agama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php show_penduduk($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Bantuan</h4>
                            <a href="<?= $base_url; ?>admin/bantuan" class="btn btn-sm btn-primary font-weight-bold shadow"><i class="fas fa-list"></i> &nbsp;Selengkapnya</a>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table class="table example2 table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Bantuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php show_bantuan($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Vaksin</h4>
                            <a href="<?= $base_url; ?>admin/vaksin" class="btn btn-sm btn-primary font-weight-bold shadow"><i class="fas fa-list"></i> &nbsp;Selengkapnya</a>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table class="table example2 table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status Vaksin</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php show_vaksin($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->