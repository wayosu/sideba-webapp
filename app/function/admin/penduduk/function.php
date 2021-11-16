<?php

function create($nik,$nama,$tgl_lahir,$jk,$alamat,$dusun,$pekerjaan,$agama,$email,$password,$mysqli)
{
    $mysqli->query("INSERT INTO user(nik,nama,tgl_lahir,jk,alamat,dusun,pekerjaan,agama,email,password,role) VALUES ('$nik','$nama','$tgl_lahir','$jk','$alamat','$dusun','$pekerjaan','$agama','$email','$password',0)");
}