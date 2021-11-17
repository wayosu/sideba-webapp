<?php

function read($base_url, $mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE role=0");
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        $lahir = new DateTime($row['tgl_lahir']);
        $today = new DateTime('today');
        $tahun = $today->diff($lahir)->y;

        echo "
            <tr>
                <td>$no</td>
                <td>$row[nik]</td>
                <td>$row[nama]</td>
                <td>$row[jk]</td>
                <td>$tahun Tahun</td>
                <td>$row[pekerjaan]</td>
                <td>
        ";
?>

        <button type="button" class="btn rounded-circle bg-secondary border-0" style="width: 20px;height: 20px;padding: 0px;" data-toggle="dropdown">
            <div class="text-light text-md" style="margin-top: -6px;"><i class="fas fa-sort-down"></i></div>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-detail<?= $row['id']; ?>">Detail</button>
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-edit<?= $row['id']; ?>">Edit</button>
            <form action="<?= $base_url; ?>admin/penduduk" method="POST" onsubmit="return confirm('Anda yakin menghapus data ini?')">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <button type="submit" name="hapus" class="btn dropdown-item rounded-0">Hapus</button>
            </form>
            <form action="<?= $base_url; ?>admin/penduduk" method="POST" onsubmit="return confirm('Anda yakin mengatur password data ini ke password default?')">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <button type="submit" name="reset_password" class="btn dropdown-item rounded-0">Reset Password</button>
            </form>
        </div>
        <?php
        echo "
                </td>
            </tr>
        ";
        ?>
        <div class="modal fade" id="modal-detail<?= $row['id']; ?>">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-sm">

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">NIK</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['nik']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Nama</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['nama']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Tanggal Lahir</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= date('d F Y', strtotime($row['tgl_lahir'])); ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Umur</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $tahun; ?> Tahun</p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Jenis Kelamin</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['jk']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Alamat</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['alamat']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Dusun</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['dusun']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Pekerjaan</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['pekerjaan']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Agama</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['agama']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Email</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['email']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary px-4 float-right" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-edit<?= $row['id']; ?>">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= $base_url; ?>admin/penduduk" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <div class="modal-body text-sm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">NIK</label>
                                        <input type="number" class="form-control form-control-lg text-sm" value="<?= $row['nik']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control form-control-lg text-sm" value="<?= $row['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control form-control-lg text-sm" id="tgl_lahir" value="<?= $row['tgl_lahir']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control form-control-lg text-sm">
                                            <?php
                                            if ($row['jk'] == "Laki-laki") {
                                            ?>
                                                <option hidden>-Pilih Jenis Kelamin-</option>
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            <?php
                                            } else if ($row['jk'] == "Perempuan") {
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
                                        <textarea name="alamat" id="alamat" class="form-control form-control-lg text-sm"><?= $row['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dusun">Dusun</label>
                                        <input type="text" name="dusun" class="form-control form-control-lg text-sm" id="dusun" value="<?= $row['dusun'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control form-control-lg text-sm" id="pekerjaan" value="<?= $row['pekerjaan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control form-control-lg text-sm">
                                            <?php
                                            if ($row['agama'] == "Islam") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam" selected>Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row['agama'] == "Kristen") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen" selected>Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row['agama'] == "Katolik") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik" selected>Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row['agama'] == "Hindu") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu" selected>Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row['agama'] == "Buddha") {
                                            ?>
                                                <option hidden>-Pilih Agama-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha" selected>Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            <?php
                                            } else if ($row['agama'] == "Konghucu") {
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
                                        <input type="email" name="email" class="form-control form-control-lg text-sm" id="email" value="<?= $row['email']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="vaksin" id="customSwitch<?=$no;?>" value="1" <?= (isset($row['vaksin']) && $row['vaksin'] == 1) ? 'checked' : '' ?> >
                                            <label class="custom-control-label" for="customSwitch<?=$no;?>">sudah di vaksin?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="edit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?php
        $no++;
    }
}

function create($nik, $nama, $tgl_lahir, $jk, $alamat, $dusun, $pekerjaan, $agama, $email, $password, $vaksin, $mysqli)
{
    $mysqli->query("INSERT INTO user(nik,nama,tgl_lahir,jk,alamat,dusun,pekerjaan,agama,email,password,role,vaksin) VALUES ('$nik','$nama','$tgl_lahir','$jk','$alamat','$dusun','$pekerjaan','$agama','$email','$password',0,'$vaksin')");
}

function update($id, $nama, $tgl_lahir, $jk, $alamat, $dusun, $pekerjaan, $agama, $vaksin, $mysqli)
{
    $mysqli->query("UPDATE user SET nama='$nama',tgl_lahir='$tgl_lahir',jk='$jk',alamat='$alamat',dusun='$dusun',pekerjaan='$pekerjaan',agama='$agama',vaksin='$vaksin' WHERE id='$id'");
}

function destroy($id, $mysqli)
{
    $mysqli->query("DELETE FROM user WHERE id='$id'");
}

function resetpass($id, $mysqli)
{
    $pass = md5('pendudukBerlian');
    $mysqli->query("UPDATE user SET password='$pass' WHERE id='$id'");
}
