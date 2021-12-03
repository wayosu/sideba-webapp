<?php
include 'app/post/admin/post_surat.php';
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
                    <h1 class="m-0 ml-2 text-dark text-lg font-weight-normal">Data Surat Keterangan Usaha</h1>
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
                            <h4 class="card-title">Daftar Pengajuan Surat Keterangan Usaha</h4>
                        </div>
                        <div class="border-bottom my-3"></div>
                        <table id="example1" class="table table-striped text-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK</th>
                                    <th>Nama Pengaju</th>
                                    <th>Status</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result_sktm = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_surat='3'");
                                    $no=1;
                                    while ($row_sktm = $result_sktm->fetch_assoc()) {
                                        $date = date('d-m-Y H:i:s', strtotime($row_sktm['created_at']));
                                        $ru = $mysqli->query("SELECT * FROM user WHERE id='$row_sktm[id_user]'");
                                        $r = $ru->fetch_assoc();
                                        echo"
                                            <tr>
                                                <td>$no</td>
                                                <td>$r[nik]</td>
                                                <td>$r[nama]</td>
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
                                                            if ($row_sktm['status'] == 'Diterima') {
                                                                echo "-";
                                                            } else if ($row_sktm['status'] == 'Ditolak') {
                                                                echo "-";
                                                            } else {
                                                                echo "";
                                                                ?>
                                                                    <div class="d-flex">
                                                                        <form action="" method="post" class="mr-1">
                                                                            <input type="hidden" name="id" value="<?= $row_sktm['id']; ?>">
                                                                            <button type="submit" name="terima_sku" class="btn btn-xs btn-success"><i class="fas fa-check"></i> Terima</button>
                                                                        </form>
                                                                        <form action="" method="post" class="ml-1">
                                                                            <input type="hidden" name="id" value="<?= $row_sktm['id']; ?>">
                                                                            <button type="submit" name="tolak_sku" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> Tolak</button>
                                                                        </form>
                                                                    </div>
                                                                <?php
                                                                echo"";
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