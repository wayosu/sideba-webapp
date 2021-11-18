<?php

if (isset($_POST['auth'])) {
    if (empty($_POST['email']) && empty($_POST['password'])) {
    ?>
        <script>
            alert('Maaf masukkan email dan password terlebih dahulu !');
            document.location.href = '<?= $base_url; ?>admin/login';
        </script>
    <?php
        return false;
    }

    $stmt = $mysqli->prepare("SELECT id, nama, password, role FROM user WHERE email = ?");
    
    if ($stmt) {
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nama, $password, $role);
            $stmt->fetch();
            if (md5($_POST['password']) == $password) {
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['nama'] = $nama;
                $_SESSION['role'] = $role;
                
                if ($role == 1) {
                    ?>
                    <script>
                        document.location.href = '<?= $base_url ?>admin';
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        document.location.href = '<?= $base_url ?>user';
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert('Password yang anda masukkan salah !');
                    document.location.href = '<?= $base_url ?>login';
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Email yang anda masukkan salah !');
                document.location.href = '<?= $base_url; ?>login';
            </script>
            <?php
        }
        $stmt->close();
    }
}