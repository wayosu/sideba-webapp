<?php
    function read($mysqli)
    {
        $result = $mysqli->query("SELECT * FROM user ORDER BY vaksin DESC");
        $no=1;
        while($row = $result->fetch_assoc()) {
            $lahir = new DateTime($row['tgl_lahir']);
            $today = new DateTime('today');
            $tahun = $today->diff($lahir)->y;

            echo"
                <tr>
                    <td>$no</td>
                    <td>$row[nik]</td>
                    <td>$row[nama]</td>
                    <td>
            ";
                        if ($row['vaksin'] == 1) {
                        ?>
                            <span class="badge py-1 px-2 bg-teal">SUDAH</span>
                        <?php
                        } else {
                        ?>
                            <span class="badge py-1 px-2 bg-danger">BELUM</span>
                        <?php
                        }
            echo"
                    </td>
                    <td>$row[jk]</td>
                    <td>$tahun Tahun</td>
                    <td>$row[alamat]</td>
                </tr>
            ";
        $no++;
        }
    }
?>