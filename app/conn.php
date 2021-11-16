<?php

$mysqli = new Mysqli("localhost","root","","db_sideba");

if (!$mysqli) {
    echo "Koneksi bermasalah!";
}