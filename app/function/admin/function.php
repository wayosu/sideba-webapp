<?php

function total_penduduk($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user");
    $total = mysqli_num_rows($result);

    return $total;
}

function laki_laki($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE jk='Laki-laki'");
    $total = mysqli_num_rows($result);

    return $total;
}

function perempuan($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE jk='Perempuan'");
    $total = mysqli_num_rows($result);
    // $cek = isset($total) ? $total : 0;

    return $total;
}

function vaksin($mysqli)
{
    $result = $mysqli->query("SELECT * FROM user WHERE vaksin=1");
    $total = mysqli_num_rows($result);

    return $total;
}