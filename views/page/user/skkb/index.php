<?php
include 'app/post/user/post_surat.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="rounded py-2 px-3 bg-teal text-sm shadow">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Data Surat Keterangan Kelakuan Baik</h1>
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
                            <h4 class="card-title">Daftar Pengajuan Surat Keterangan Kelakuan Baik</h4>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-pengajuan"><i class="fas fa-paper-plane"></i> Pengajuan Surat</button>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table id="example1" class="table table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Surat</th>
                                    <th>Status</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result_sktm = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_surat='2' AND id_user='$row_data[id]'");
                                    $no=1;
                                    while ($row_sktm = $result_sktm->fetch_assoc()) {
                                        $date = date('d-m-Y H:i:s', strtotime($row_sktm['created_at']));
                                        echo"
                                            <tr>
                                                <td>$no</td>
                                                <td>Surat Keterangan Tidak Mampu</td>
                                                <td>
                                        ";
                                                    if ($row_sktm['status'] == 'Sedang Diproses') {
                                                        echo "<span class='badge badge-warning text-white'>$row_sktm[status]</span>";
                                                    } else if ($row_sktm['status'] == 'Ditolak') {
                                                        echo "<span class='badge badge-danger'>$row_sktm[status]</span>";
                                                    } else {
                                                        echo "<span class='badge badge-success'>$row_sktm[status]</span>";
                                                    }
                                        echo"
                                                </td>
                                                <td>$date</td>
                                                <td>
                                                ";
                                                            if ($row_sktm['status'] == 'Sedang Diproses') {
                                                                echo "-";
                                                            } else if ($row_sktm['status'] == 'Ditolak') {
                                                                echo "";
                                                                ?>
                                                                    <div class="d-flex">
                                                                        <form action="" method="post" class="mr-1">
                                                                            <input type="hidden" name="id" value="<?= $row_sktm['id']; ?>">
                                                                            <button type="submit" name="hapus_skkb" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                                                        </form>
                                                                    </div>
                                                                <?php
                                                                echo"";
                                                            } else {
                                                                echo "<a href='' class='btn btn-xs btn-primary'><i class='fas fa-download'></i> Download</a>";
                                                            }
                                                echo"
                                                        </td>
                                            </tr>
                                        ";
                                    $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<div class="modal fade" id="modal-pengajuan">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-sm pb-0">
                <div class="text-center">
                    <h6 class="text-bold">Surat Keterangan Tidak Mampu</h6>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <h3 class="text-primary w-25 p-3" style="border: 1px solid #007bff;border-radius: 50%;"><i class="fas fa-paper-plane"></i></h3>
                        <p>Silahkan kirim pengajuan surat agar bisa di proses oleh Admin!</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                <form action="" method="post">
                    <input type="hidden" name="id_user" value="<?= $row_data['id']; ?>">
                    <input type="hidden" name="id_surat" value="2">
                    <button type="submit" name="kirim_pengajuan_skkb" class="btn btn-sm btn-primary">Kirim Perngajuan</button>
                </form>
            </div>
        </div>
    </div>
</div>