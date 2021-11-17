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
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Total Penduduk</h5>
                        <h4 class="text-right"><i class="fa fa-users f-left"></i><span><?= total_penduduk($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Laki-laki</h5>
                        <h4 class="text-right"><i class="fa fa-male f-left"></i><span><?= laki_laki($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Perempuan</h5>
                        <h4 class="text-right"><i class="fa fa-female f-left"></i><span><?= perempuan($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card shadow">
                    <div class="card-block">
                        <h5 class="m-b-20">Sudah Vaksin</h5>
                        <h4 class="text-right"><i class="fa fa-syringe f-left"></i><span><?= vaksin($mysqli); ?></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->