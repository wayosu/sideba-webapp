<?php include 'app/function/admin/function_profile.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $dusun = $_POST['dusun'];
    $pekerjaan = $_POST['pekerjaan'];
    $agama = $_POST['agama'];

    $update = update($id, $nama, $tgl_lahir, $jk, $alamat, $dusun, $pekerjaan, $agama, $mysqli);
    if (!$update){
        ?>
        <script>
            alert('Berhasil memperbarui data');
            document.location = '<?= $base_url; ?>admin/profile';
        </script>
        <?php
        

    }
}
?>
