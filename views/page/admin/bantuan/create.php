<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Tambah Data Bantuan</h1>
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
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <!-- form start -->
                    <form action="<?= $base_url; ?>admin/bantuan" method="POST">
                        <div class="card-body">
                            <a href="<?= $base_url; ?>admin/bantuan" class="btn btn-sm btn-link"><i class="fas fa-arrow-left"></i> Kembali</a>
                            <div class="border-bottom my-3"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <select class="form-control select2" name="nik" onchange="fetch_select(this.value);" style="width: 100%;">
                                            <option value="" hidden>--Pilih Data Penduduk--</option>
                                            <?php
                                            $result = $mysqli->query("SELECT * FROM user WHERE role=0");
                                            while ($row = $result->fetch_assoc()) {
                                                $result_bantuan = $mysqli->query("SELECT * FROM bantuan WHERE nik='{$row['nik']}'");
                                                if (mysqli_num_rows($result_bantuan) == 0) {
                                            ?>
                                                    <option value="<?= $row['nik']; ?>"><?= $row['nik']; ?> - <?= $row['nama']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div id="infoData">

                                    </div>
                                </div>
                            </div>
                            <div id="btnForSubmit">

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->