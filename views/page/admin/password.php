<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Ubah Password</h1>
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
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pekerjaan">Password Lama</label>
                                <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" id="pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Password Baru</label>
                                <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" id="pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Konfirmasi Password Baru</label>
                                <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" id="pekerjaan">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary font-weight-bold">Simpan</button>
                                <a href="<?= $base_url; ?>admin/profile" class="btn btn-sm font-weight-bold btn-warning text-white">Ubah Profil</a>
                                <button type="reset" class="btn btn-sm btn-danger font-weight-bold">Reset</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>