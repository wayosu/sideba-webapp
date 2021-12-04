<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Penerima Bantuan</title>
    <style>
        .display-data {
            font-size: 12px;
            border: 1px solid black;
            width: 100%;
            border-collapse: collapse;
        }

        .display-data th {
            padding: 8px;
        }

        .display-data th,
        .display-data td {
            border: 1px solid black;
            text-align: center;
            width: auto;
        }

        .display-header {
            margin-bottom: 1rem;
        }

        .display-header td {
            text-align: center;
        }

        h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <table width="100%" class="display-header">
        <tr>
            <td>
                <img src="assets/images/logo.png" alt="logo-kab" width="50">
            </td>
        </tr>
        <tr>
            <td>
                <h4>PEMERINTAH KABUPATEN BONE BOLANGO</h4>
                <h4>KECAMATAN TILONGKABILA</h4>
                <h4>DESA BERLIAN</h4>
            </td>
        </tr>
        <tr>
            <td>
                <small>Jl. Tapa - Kabila, Tamboo, Tilongkabila, Kabupaten Bone Bolango, Gorontalo - 96129</small>
            </td>
        </tr>
    </table>

    <h4>Daftar Penerima Bantuan</h4>
    <table width="100%" class="display-data">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Jenis Bantuan</th>
                <th>Dusun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $result = $mysqli->query("SELECT * FROM bantuan JOIN user ON bantuan.nik = user.nik WHERE bantuan.nik = user.nik");
            while ($row = $result->fetch_assoc()) {
                // $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row_peneriama[DSN]'");
                // $row_dusun = $sql_dusun->fetch_assoc();
            ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['pekerjaan'] ?></td>
                    <td><?= $row['jenis_bantuan'] ?></td>
                    <td><?= $row['dusun'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>