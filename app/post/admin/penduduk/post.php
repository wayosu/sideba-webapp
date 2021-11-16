<?php
    include 'app/function/admin/penduduk/function.php';

    if (isset($_POST['simpan'])) {
        $nik = $_POST['nik'];
        $email = $_POST['email'];

        $result = $mysqli->query("SELECT * FROM user WHERE nik='$nik'");

        if (mysqli_num_rows($result) > 0) {
            ?>
                <script>
                    alert('Maaf NIK telah digunakan!');
                    document.location = '<?= $base_url; ?>admin/penduduk/create';
                </script>
            <?php
            return false;
        }

        $result2 = $mysqli->query("SELECT * FROM user WHERE email='$email'");

        if (mysqli_num_rows($result2) > 0) {
            ?>
                <script>
                    alert('Maaf email telah digunakan!');
                    document.location = '<?= $base_url; ?>admin/penduduk/create';
                </script>
            <?php
            return false;
        }

        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $dusun = $_POST['dusun'];
        $pekerjaan = $_POST['pekerjaan'];
        $agama = $_POST['agama'];
        $password = md5($_POST['password']);

        $insert = create($nik,$nama,$tgl_lahir,$jk,$alamat,$dusun,$pekerjaan,$agama,$email,$password,$mysqli);
        if (!$insert) {
            ?>
                <script>
                    alert('Berhasil menambahkan penduduk');
                    document.location = '<?= $base_url; ?>/admin/penduduk';
                </script>
            <?php
        }
    }
?>