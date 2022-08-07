<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "jadwaldotcom";

  $conn = new mysqli($host, $username, $password, $dbname);

  // Error handling and setting the database.
  if($conn->connect_error) {
    die('terjadi kesalahan');
  }
?>