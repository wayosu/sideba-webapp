<?php include 'app/post/user/post_profile.php' ?>
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
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $row_data['id']?>">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="pass_lama">Password Lama</label>
                                <input type="password" name="pass_lama" class="form-control form-control-lg text-sm" id="pass_lama">
                            </div>
                            <div class="form-group">
                                <label for="pass_baru">Password Baru</label>
                                <input type="password" name="pass_baru" class="form-control form-control-lg text-sm" id="pass_baru">
                            </div>
                            <div class="form-group">
                                <label for="konfir_pass_baru">Konfirmasi Password Baru</label>
                                <input type="password" name="konfir_pass_baru" class="form-control form-control-lg text-sm" id="konfir_pass_baru">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="update_pass" class="btn btn-sm btn-primary font-weight-bold">Simpan</button>
                                <a href="<?= $base_url; ?>user/profile" class="btn btn-sm font-weight-bold btn-warning text-white">Ubah Profil</a>
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