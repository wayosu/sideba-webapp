<?php
function update($id, $nama, $tgl_lahir, $jk, $alamat, $dusun, $pekerjaan, $agama, $mysqli) {
    $mysqli->query("UPDATE user SET nama = '$nama', tgl_lahir = '$tgl_lahir', jk = '$jk', alamat = '$alamat', dusun = '$dusun', pekerjaan = '$pekerjaan', agama ='$agama' WHERE id = '$id'");
}

function updatePass($id, $pass_baru, $mysqli) {
    $mysqli->query("UPDATE user SET password = '$pass_baru' WHERE id = '$id'");
}
?>