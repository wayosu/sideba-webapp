<?php
    include 'app/function/admin/vaksin/function.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Data Vaksin</h1>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Vaksin</h4>
                            <form action="<?= $base_url; ?>admin/cetak_vaksin" method="post" target="_BLANK">
                                <button type="submit" name="cetak_vaksin" class="btn btn-sm bg-teal font-weight-bold shadow"><i class="fas fa-print"></i> Cetak</button>
                            </form>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table id="example1" class="table table-striped text-sm">
                            <thead>
                                <tr>
                                    <th width="4%">#</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th width="12%">Status Vaksin</th>
                                    <th width="12%">Jenis Kelamin</th>
                                    <th width="12%">Umur</th>
                                    <th>Alamat</th>
                                    <th>Dusun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php read($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->