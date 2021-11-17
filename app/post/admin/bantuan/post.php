<?php

include 'app/function/admin/bantuan/function.php';

if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $jb = $_POST['jb'];

    $insert = create($nik, $jb, $mysqli);

    if (!$insert) {
    ?>
        <script>
            alert('Berhasil menambahkan data bantuan');
            document.location = '<?= $base_url; ?>admin/bantuan';
        </script>
    <?php
    }
}

if (isset($_POST['edit'])) {
    $nik = $_POST['nik'];
    $jb = $_POST['jb'];

    $edit = update($nik, $jb, $mysqli);

    if (!$edit) {
    ?>
        <script>
            alert('Berhasil memperbarui data bantuan');
            document.location = '<?= $base_url; ?>admin/bantuan';
        </script>
    <?php
    }
}

if (isset($_POST['hapus'])) {
    $nik = $_POST['nik'];

    $delete = destroy($nik, $mysqli);

    if (!$delete) {
    ?>
        <script>
            alert('Berhasil menghapus data bantuan');
            document.location = '<?= $base_url; ?>admin/bantuan';
        </script>
    <?php
    }
}