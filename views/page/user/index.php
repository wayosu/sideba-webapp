<?php
    include 'app/function/user/function.php';
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
            <div class="col-md-3 col-xl-3">
                <div class="card bg-c-blue order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Total Pengajuan Surat</h5>
                        <h4 class="text-right"><i class="fa fa-paper-plane f-left"></i><span><?= total_pengajuan($mysqli, $ididid); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="card bg-c-yellow order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Surat Keterangan Tidak Mampu</h5>
                        <h4 class="text-right"><i class="fa fa-envelope f-left"></i><span><?= sktm($mysqli, $ididid); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="card bg-c-pink order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Surat Keterangan Kelakuan Baik</h5>
                        <h4 class="text-right"><i class="fa fa-envelope f-left"></i><span><?= skkb($mysqli, $ididid); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3">
                <div class="card bg-c-green order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Surat Keterangan Usaha</h5>
                        <h4 class="text-right"><i class="fa fa-envelope f-left"></i><span><?= sku($mysqli, $ididid); ?></span></h4>
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
                                    <th>Nama Surat</th>
                                    <th>Status</th>
                                    <th>Waktu Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php pengajuan_surat($mysqli, $ididid); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->