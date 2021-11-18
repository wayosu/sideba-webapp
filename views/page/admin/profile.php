<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Ubah Profil</h1>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control form-control-lg text-sm" value="<?= $row_data['nama']; ?>" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control form-control-lg text-sm" value="<?= $row_data['tgl_lahir']; ?>" id="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control form-control-lg text-sm">
                                            <?php
                                            if ($row_data['jk'] == "Laki-laki") {
                                            ?>
                                                <option hidden>-Pilih Jenis Kelamin-</option>
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            <?php
                                            } else if ($row_data['jk'] == "Perempuan") {
                                            ?>
                                                <option hidden>-Pilih Jenis Kelamin-</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan" selected>Perempuan</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option hidden>-Pilih Jenis Kelamin-</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control form-control-lg text-sm"><?= $row_data['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dusun">Dusun</label>
                                        <input type="text" name="dusun" class="form-control form-control-lg text-sm" id="dusun" value="<?= $row_data['dusun']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" value="<?= $row_data['pekerjaan']; ?>" id="pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control form-control-lg text-sm">
                                            <?php
                                            if ($row_data['agama'] == "Islam") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam" selected>Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row_data['agama'] == "Kristen") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen" selected>Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row_data['agama'] == "Katolik") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik" selected>Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row_data['agama'] == "Hindu") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu" selected>Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row_data['agama'] == "Buddha") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha" selected>Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row_data['agama'] == "Konghucu") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu" selected>Konghucu</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control form-control-lg text-sm" id="email" value="<?= $_SESSION['email']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary font-weight-bold">Simpan</button>
                                <a href="<?= $base_url; ?>admin/profile/password" class="btn btn-sm font-weight-bold btn-warning text-white">Ubah Password</a>
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