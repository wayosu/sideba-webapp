<?php

if (isset($_POST['kirim_pengajuan_sktm'])) {
    $id_user = $_POST['id_user'];
    $id_surat = $_POST['id_surat'];
    $status = 'Sedang Diproses';
    date_default_timezone_set('Asia/Makassar');
    $created_at = date("Y-m-d H:i:s");

    $pengajuan = $mysqli->query("INSERT INTO pengajuan_surat(id_surat,id_user,status,created_at) VALUES ('$id_surat','$id_user','$status','$created_at')");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil mengajukan surat.');
            document.location = '<?= $base_url; ?>user/sktm';
        </script>
        <?php
    }
}

if (isset($_POST['kirim_pengajuan_skkb'])) {
    $id_user = $_POST['id_user'];
    $id_surat = $_POST['id_surat'];
    $status = 'Sedang Diproses';
    date_default_timezone_set('Asia/Makassar');
    $created_at = date("Y-m-d H:i:s");

    $pengajuan = $mysqli->query("INSERT INTO pengajuan_surat(id_surat,id_user,status,created_at) VALUES ('$id_surat','$id_user','$status','$created_at')");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil mengajukan surat.');
            document.location = '<?= $base_url; ?>user/skkb';
        </script>
        <?php
    }
}

if (isset($_POST['kirim_pengajuan_sku'])) {
    $id_user = $_POST['id_user'];
    $id_surat = $_POST['id_surat'];
    $status = 'Sedang Diproses';
    date_default_timezone_set('Asia/Makassar');
    $created_at = date("Y-m-d H:i:s");

    $pengajuan = $mysqli->query("INSERT INTO pengajuan_surat(id_surat,id_user,status,created_at) VALUES ('$id_surat','$id_user','$status','$created_at')");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil mengajukan surat.');
            document.location = '<?= $base_url; ?>user/sku';
        </script>
        <?php
    }
}

if (isset($_POST['hapus_sktm'])) {
    $id = $_POST['id'];

    $pengajuan = $mysqli->query("DELETE FROM pengajuan_surat WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menghapus pengajuan surat.');
            document.location = '<?= $base_url; ?>user/sktm';
        </script>
        <?php
    }
}

if (isset($_POST['hapus_skkb'])) {
    $id = $_POST['id'];

    $pengajuan = $mysqli->query("DELETE FROM pengajuan_surat WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menghapus pengajuan surat.');
            document.location = '<?= $base_url; ?>user/skkb';
        </script>
        <?php
    }
}

if (isset($_POST['hapus_sku'])) {
    $id = $_POST['id'];

    $pengajuan = $mysqli->query("DELETE FROM pengajuan_surat WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menghapus pengajuan surat.');
            document.location = '<?= $base_url; ?>user/sku';
        </script>
        <?php
    }
}