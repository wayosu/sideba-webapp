<?php

function total_pengajuan($mysqli, $ididid)
{
    $result = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_user='$ididid'");
    $total = mysqli_num_rows($result);

    return $total;
}

function sktm($mysqli, $ididid)
{
    $result = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_user='$ididid' AND id_surat='1'");
    $total = mysqli_num_rows($result);

    return $total;
}

function skkb($mysqli, $ididid)
{
    $result = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_user='$ididid' AND id_surat='2'");
    $total = mysqli_num_rows($result);
    // $cek = isset($total) ? $total : 0;

    return $total;
}

function sku($mysqli, $ididid)
{
    $result = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_user='$ididid' AND id_surat='3'");
    $total = mysqli_num_rows($result);

    return $total;
}

function pengajuan_surat($mysqli, $ididid)
{
    $result = $mysqli->query("SELECT * FROM pengajuan_surat WHERE id_user='$ididid' ORDER BY id DESC LIMIT 6");
    while ($row = $result->fetch_assoc()) {
        $date = date('d-m-Y H:i:s', strtotime($row['created_at']));
        
        $rs = $mysqli->query("SELECT * FROM surat WHERE id='$row[id_surat]'");
        $r = $rs->fetch_assoc();
        echo "
            <tr>
                <td>$r[nama_surat]</td>
                <td>
                ";
                    if ($row['status'] == 'Sedang Diproses') {
                        echo "<span class='badge badge-warning text-white'>$row[status]</span>";
                    } else if ($row['status'] == 'Ditolak') {
                        echo "<span class='badge badge-danger'>$row[status]</span>";
                    } else {
                        echo "<span class='badge badge-success'>$row[status]</span>";
                    }
                echo"
                </td>
                <td>$date</td>
            </tr>
        ";
    }
}