<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-user"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Tambah Penduduk</h1>
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
                    <form action="<?= $base_url; ?>admin/penduduk" method="POST">
                        <div class="card-body">
                            <a href="<?= $base_url; ?>admin/penduduk" class="btn btn-sm btn-link"><i class="fas fa-arrow-left"></i> Kembali</a>
                            <div class="border-bottom my-3"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="number" name="nik" class="form-control form-control-lg text-sm" id="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control form-control-lg text-sm" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control form-control-lg text-sm" id="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control form-control-lg text-sm">
                                            <option hidden>-Pilih Jenis Kelamin-</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control form-control-lg text-sm"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dusun">Dusun</label>
                                        <input type="text" name="dusun" class="form-control form-control-lg text-sm" id="dusun">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" id="pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control form-control-lg text-sm">
                                            <option hidden>-Pilih Agama-</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg text-sm" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password (Password Default)</label>
                                        <input type="text" name="password" class="form-control form-control-lg text-sm" id="password" readonly value="pendudukBerlian">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-sm btn-primary font-weight-bold shadow">Simpan</button>
                                <button type="reset" class="btn btn-sm btn-danger font-weight-bold shadow">Reset</button>
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