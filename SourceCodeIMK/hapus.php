<?php
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    require 'config.php';

    $id_matkul    = $_POST['id_matkul'];
    $id_user      = $_SESSION['id_user'];
    $action       = 'hapus';
    $waktu_dibuat = date("d.m.y H:i:s");

    $sql = "DELETE FROM matkul WHERE id_matkul = '$id_matkul' AND id_user = '$id_user'";
    $statement = $conn->query($sql);

    $sql = "INSERT INTO logging VALUES (null, '$id_user', '$action', '$waktu_dibuat')";
    $statement = $conn->query($sql);

    header("Location: index.php");
?>
