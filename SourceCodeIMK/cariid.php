<?php
session_start();
require 'config.php';

$loadid= $_POST['loadid'];

$sql = "SELECT id_user FROM pengguna WHERE id_user = '$loadid'";
$statement = $conn->query($sql);
$data_pengguna = $statement->fetch_all(MYSQLI_ASSOC);

if (empty($data_pengguna)) {
    echo "Jokowi";
  } else {
    $_SESSION['id_user'] = $data_pengguna[0]['id_user'];
  };
  header("location: index.php");
?>