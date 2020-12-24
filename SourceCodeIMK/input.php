<?php

session_start();
date_default_timezone_set('Asia/Jakarta');
require 'config.php';

$nama_matkul= $_POST['nama_matkul'];
$keterangan = $_POST['keterangan'];
$hari       = $_POST['hari'];
$waktumulai = $_POST['waktumulai'];
$waktuakhir = $_POST['waktuakhir'];
$id_user    = $_SESSION['id_user'];
$action     = 'input';

if ($waktuakhir < $waktumulai) {
    echo "<div style='color:red'>Waktu mulai tidak bisa lebih besar dari waktu selesai!</div>";
} else {
    $waktu_dibuat = date("d.m.Y H:i:s");
    $sql = "INSERT INTO matkul VALUES (null, '$nama_matkul','$keterangan','$hari','$waktumulai','$waktuakhir','$id_user')";
    $statement = $conn->query($sql);

    $sql = "INSERT INTO logging VALUES (null,'$id_user','$action','$waktu_dibuat')";
    $statement = $conn->query($sql);
    }
?>
