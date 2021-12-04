<?php
    include 'app/post/admin/penduduk/post.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-user"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Data Penduduk</h1>
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
                            <h4 class="card-title">Data Penduduk</h4>
                            <form action="<?= $base_url; ?>admin/cetak_penduduk" method="post" target="_BLANK">
                                <a href="<?= $base_url; ?>admin/penduduk/create" class="btn btn-sm btn-primary font-weight-bold shadow"><i class="fas fa-plus-circle"></i> Tambah Penduduk</a>
                                <button type="submit" name="cetak_penduduk" class="btn btn-sm bg-teal font-weight-bold shadow"><i class="fas fa-print"></i> Cetak</button>
                            </form>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table id="example1" class="table table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Pekerjaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php read($base_url, $mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->