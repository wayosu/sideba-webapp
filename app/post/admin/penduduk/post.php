<?php
    include 'app/function/admin/penduduk/function.php';

    if (isset($_POST['simpan'])) {
        $nik = $_POST['nik'];
        $email = $_POST['email'];

        $result = $mysqli->query("SELECT * FROM user WHERE nik='$nik'");
        $result2 = $mysqli->query("SELECT * FROM user WHERE email='$email'");

        if (mysqli_num_rows($result) > 0) {
            ?>
                <script>
                    alert('Maaf NIK telah digunakan!');
                    document.location = '<?= $base_url; ?>admin/penduduk/create';
                </script>
            <?php
            return false;
        }


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
        $vaksin = isset($_POST['vaksin']) ? $_POST['vaksin'] : 0;

        $insert = create($nik,$nama,$tgl_lahir,$jk,$alamat,$dusun,$pekerjaan,$agama,$email,$password,$vaksin,$mysqli);
        if (!$insert) {
            ?>
                <script>
                    alert('Berhasil menambahkan data penduduk');
                    document.location = '<?= $base_url; ?>admin/penduduk';
                </script>
            <?php
        }
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $dusun = $_POST['dusun'];
        $pekerjaan = $_POST['pekerjaan'];
        $agama = $_POST['agama'];
        $vaksin = isset($_POST['vaksin']) ? $_POST['vaksin'] : 0;

        $edit = update($id,$nama,$tgl_lahir,$jk,$alamat,$dusun,$pekerjaan,$agama,$vaksin,$mysqli);
        if (!$edit) {
            ?>
                <script>
                    alert('Berhasil memperbarui data penduduk');
                    document.location = '<?= $base_url; ?>admin/penduduk';
                </script>
            <?php
        }
    }

    if (isset($_POST['hapus'])) {
        $id = $_POST['id'];

        $delete = destroy($id,$mysqli);
        if (!$delete) {
            ?>
                <script>
                    alert('Berhasil menghapus data penduduk');
                    document.location = '<?= $base_url; ?>admin/penduduk';
                </script>
            <?php
        }
    }

    if (isset($_POST['reset_password'])) {
        $id = $_POST['id'];

        $reset = resetpass($id,$mysqli);
        if (!$reset) {
            ?>
                <script>
                    alert("Berhasil mengatur ulang password. Password default 'pendudukBerlian'");
                    document.location = '<?= $base_url; ?>admin/penduduk';
                </script>
            <?php
        }
    }
?>