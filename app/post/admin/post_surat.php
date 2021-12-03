<?php

if (isset($_POST['terima_sktm'])) {
    $id = $_POST['id'];
    $status = 'Diterima';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menerima pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/sktm';
        </script>
        <?php
    }
}

if (isset($_POST['terima_skkb'])) {
    $id = $_POST['id'];
    $status = 'Diterima';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menerima pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/skkb';
        </script>
        <?php
    }
}

if (isset($_POST['terima_sku'])) {
    $id = $_POST['id'];
    $status = 'Diterima';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menerima pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/sku';
        </script>
        <?php
    }
}

if (isset($_POST['tolak_sktm'])) {
    $id = $_POST['id'];
    $status = 'Ditolak';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menolak pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/sktm';
        </script>
        <?php
    }
}

if (isset($_POST['tolak_skkb'])) {
    $id = $_POST['id'];
    $status = 'Ditolak';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menolak pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/skkb';
        </script>
        <?php
    }
}

if (isset($_POST['tolak_sku'])) {
    $id = $_POST['id'];
    $status = 'Ditolak';

    $pengajuan = $mysqli->query("UPDATE pengajuan_surat SET status='$status' WHERE id='$id'");
    if ($pengajuan){
        ?>
        <script>
            alert('Berhasil menolak pengajuan surat.');
            document.location = '<?= $base_url; ?>admin/sku';
        </script>
        <?php
    }
}