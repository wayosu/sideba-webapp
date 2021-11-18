<?php

function read($base_url, $mysqli)
{
    $result = $mysqli->query("SELECT * FROM bantuan JOIN user ON bantuan.nik = user.nik");
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>$no</td>
                <td>$row[nik]</td>
                <td>$row[nama]</td>
                <td>$row[alamat]</td>
                <td>$row[pekerjaan]</td>
                <td><span class='badge py-1 px-3 bg-teal'>$row[jenis_bantuan]</span></td>
                <td>
        ";
?>
        <button type="button" class="btn rounded-circle bg-secondary border-0" style="width: 20px;height: 20px;padding: 0px;" data-toggle="dropdown">
            <div class="text-light text-md" style="margin-top: -6px;"><i class="fas fa-sort-down"></i></div>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-detail<?= $row['nik']; ?>">Detail</button>
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-edit<?= $row['nik']; ?>">Edit</button>
            <form action="<?= $base_url; ?>admin/bantuan" method="POST" onsubmit="return confirm('Anda yakin menghapus data ini?')">
                <input type="hidden" name="nik" value="<?= $row['nik']; ?>">
                <button type="submit" name="hapus" class="btn dropdown-item rounded-0">Hapus</button>
            </form>
        </div>
        <?php
        echo "
                </td>
            </tr>
        ";
        ?>
        <div class="modal fade" id="modal-detail<?= $row['nik']; ?>">
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
                                <p class="font-weight-bold my-1">Email</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><?= $row['email']; ?></p>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <div class="d-flex align-items-center px-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold my-1">Bantuan</p>
                            </div>
                            <div class="col-md-6">
                                <p class="my-1"><span class="badge py-1 px-3 bg-teal"><?= $row['jenis_bantuan']; ?></span></p>
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

        <div class="modal fade" id="modal-edit<?= $row['nik']; ?>">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= $base_url; ?>admin/bantuan" method="POST">
                        <input type="hidden" name="nik" value="<?= $row['nik']; ?>">
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
                                    <p class="font-weight-bold my-1">Email</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><?= $row['email']; ?></p>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="d-flex align-items-center px-2">
                                <div class="col-sm-12 col-md-6">
                                    <p class="font-weight-bold my-1">Bantuan</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <select name="jb" id="jb" class="form-control select2">
                                        <?php
                                        if ($row['jenis_bantuan'] == "BPNT") {
                                        ?>
                                            <option value="BPNT" selected>BPNT</option>
                                            <option value="BST">BST</option>
                                            <option value="PKH">PKH</option>
                                            <option value="BLT">BLT</option>
                                        <?php
                                        } else if ($row['jenis_bantuan'] == "BST") {
                                        ?>
                                            <option value="BPNT">BPNT</option>
                                            <option value="BST" selected>BST</option>
                                            <option value="PKH">PKH</option>
                                            <option value="BLT">BLT</option>
                                        <?php
                                        } else if ($row['jenis_bantuan'] == "PKH") {
                                        ?>
                                            <option value="BPNT">BPNT</option>
                                            <option value="BST">BST</option>
                                            <option value="PKH" selected>PKH</option>
                                            <option value="BLT">BLT</option>
                                        <?php
                                        } else if ($row['jenis_bantuan'] == "BLT") {
                                        ?>
                                            <option value="BPNT">BPNT</option>
                                            <option value="BST">BST</option>
                                            <option value="PKH">PKH</option>
                                            <option value="BLT" selected>BLT</option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="" hidden>--Pilih Jenis Bantuan--</option>
                                            <option value="BPNT">BPNT</option>
                                            <option value="BST">BST</option>
                                            <option value="PKH">PKH</option>
                                            <option value="BLT">BLT</option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                        </div>
                        <div class="modal-footer d-flex justify-content-between">
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

function create($nik, $jb, $mysqli)
{
    $mysqli->query("INSERT INTO bantuan(nik,jenis_bantuan) VALUES ('$nik','$jb')");
}

function update($nik, $jb, $mysqli)
{
    $mysqli->query("UPDATE bantuan SET jenis_bantuan='$jb' WHERE nik='$nik'");
}

function destroy($nik, $mysqli)
{
    $mysqli->query("DELETE FROM bantuan WHERE nik='$nik'");
}
