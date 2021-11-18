<?php

$result_data = $mysqli->query("SELECT * FROM user WHERE id='$_SESSION[id]'");
$row_data = $result_data->fetch_assoc();