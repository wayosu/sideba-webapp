<?php

function total_penduduk($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE role=0");
    $total = mysqli_num_rows($result);

    return $total;
}

function laki_laki($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE jk='Laki-laki' AND role=0");
    $total = mysqli_num_rows($result);

    return $total;
}

function perempuan($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE jk='Perempuan' AND role=0");
    $total = mysqli_num_rows($result);
    // $cek = isset($total) ? $total : 0;

    return $total;
}

function bantuan($mysqli)
{
    $result = $mysqli->query("SELECT * FROM bantuan");
    $total = mysqli_num_rows($result);

    return $total;
}

function vaksin($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE vaksin=1 AND role=0");
    $total = mysqli_num_rows($result);

    return $total;
}

function show_penduduk($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE role=0 ORDER BY id DESC LIMIT 5");
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>$row[nik]</td>
                <td>$row[nama]</td>
                <td>$row[jk]</td>
                <td>$row[pekerjaan]</td>
                <td>$row[agama]</td>
            </tr>
        ";
    }
}

function show_bantuan($mysqli)
{
    $result = $mysqli->query("SELECT * FROM bantuan JOIN user ON bantuan.nik = user.nik ORDER BY bantuan.id DESC LIMIT 5");
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>$row[nik]</td>
                <td>$row[nama]</td>
                <td>$row[pekerjaan]</td>
                <td><span class='badge py-1 px-3 bg-teal'>$row[jenis_bantuan]</span></td>
            </tr>
        ";
    }
}

function show_vaksin($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE vaksin=1 AND role=0 ORDER BY id DESC");
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>$row[nik]</td>
                <td>$row[nama]</td>
                <td><span class='badge py-1 px-3 bg-teal'>SUDAH</span></td>
                <td>$row[jk]</td>
            </tr>
        ";
    }
}
