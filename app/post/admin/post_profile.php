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

if(isset($_POST['update_pass'])){
    $id = $_POST['id'];
    $pass_lama = md5($_POST['pass_lama']);
    $pass_baru = $_POST['pass_baru'];
    $konfir_pass_baru = $_POST['konfir_pass_baru'];
    
    if ($pass_lama == $row_data['password']) {
        if ($pass_baru == $konfir_pass_baru) {
            $pass_baru = md5($_POST['pass_baru']);

            $update = updatePass($id, $pass_baru, $mysqli);
            if (!$update){
                ?>
                <script>
                    alert('Berhasil memperbarui password. Silahkan login kembali.');
                    document.location = '<?= $base_url; ?>logout';
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Konfirmasi password baru salah!');
                document.location = '<?= $base_url; ?>admin/profile/password';
            </script>
            <?php
        }

    } else {
        ?>
        <script>
            alert('Password lama yang anda masukkan salah!');
            document.location = '<?= $base_url; ?>admin/profile/password';
        </script>
        <?php
    }

}
?>
