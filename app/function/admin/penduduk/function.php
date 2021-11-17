<?php

function read($mysqli)
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

        <button type="button" class="btn rounded-circle bg-secondary border-0" style="width: 25px;height: 25px;padding: 0px;" data-toggle="dropdown">
            <div class="text-light text-lg" style="margin-top: -6px;"><i class="fas fa-sort-down"></i></div>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-detail<?= $row['id']; ?>">Detail</button>
            <button type="button" class="btn dropdown-item rounded-0" data-toggle="modal" data-target="#modal-edit<?= $row['id']; ?>">Edit</button>
            <button type="submit" class="btn dropdown-item rounded-0">Hapus</button>
        </div>
        <?php
        echo "
                </td>
            </tr>
        ";
        ?>
        <div class="modal fade" id="modal-detail<?= $row['id']; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

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
                        <button type="button" class="btn btn-secondary px-4 float-right" data-dismiss="modal">Close</button>
                    </div>
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

function create($nik, $nama, $tgl_lahir, $jk, $alamat, $dusun, $pekerjaan, $agama, $email, $password, $mysqli)
{
    $mysqli->query("INSERT INTO user(nik,nama,tgl_lahir,jk,alamat,dusun,pekerjaan,agama,email,password,role) VALUES ('$nik','$nama','$tgl_lahir','$jk','$alamat','$dusun','$pekerjaan','$agama','$email','$password',0)");
}
