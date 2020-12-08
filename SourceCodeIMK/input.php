<?php
$nama_matkul= $_POST['nama_matkul'];
$keterangan = $_POST['keterangan'];
$hari       = $_POST['hari'];
$waktumulai = $_POST['waktumulai'];
$waktuakhir = $_POST['waktuakhir'];
$id_user    = $_SESSION['id_user'];

if (empty($nama_matkul||$keterangan||$hari||$waktumulai||$waktuakhir)) {
    $message = "Semua field harus diisi!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $sql = "INSERT INTO matkul VALUES ('$nama_matkul', '$keterangan', '$hari', '$waktumulai', '$waktuakhir')";
    $statement = $conn->query($sql);
    $message = "Data berhasil diinput!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>