<?php
session_start();
require 'config.php';
$id_user    = $_SESSION['id_user'];
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$instansi   = $_POST['instansi'];
$rating     = $_POST['rating'];
$tanggapan  = $_POST['tanggapan'];
$feedback   = $_POST['feedback'];

if(empty($instansi)) {
    $instansi = 'null';
}

$sql = "INSERT INTO kuesioner VALUES (null,'$id_user', '$nama', '$email', '$instansi', '$rating', '$tanggapan', '$feedback')";
$statement = $conn->query($sql);
?>


<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwaldotcom</title>
    <link rel="stylesheet" href="thanks.css">
</head>

<body>
    <header>
    <h1>JADWAL .(DOT) COM</h1>
    </header>
    <div id="container">
        <h1> terima kasih telah mengisi kuesioner kami</h1>
        klik <a href="./index.php">disini</a> untuk kembali ke halaman utama
    </div>
</body>