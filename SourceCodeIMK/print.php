<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
require 'config.php';
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabut", "Minggu");
$id_user = $_SESSION['id_user'];

?>

<link rel="stylesheet" href="print.css">

<table>
    <thead>
      <th>&nbsp;</th>
    
    <?php
    for ($i = 1 ; $i < 13 ; $i++) {
        echo "<th>" . $i . "</th>";
    }
    ?>
    </thead>
    <tbody>
      <?php
        for ($u = 0 ; $u < sizeof($hari) ; $u++) {

            echo "<tr>";
            echo "<td>" . $hari[$u] . "</td>";

            for ($p = 1 ; $p < 13 ; $p++) {
                $sql = "SELECT nama_matkul, keterangan, waktumulai, waktuakhir, id_matkul FROM matkul WHERE id_user = '$id_user' AND hari = '$hari[$u]' AND waktumulai = '$p'";
                $statement = $conn->query($sql);
                $matkulnya = $statement->fetch_all(MYSQLI_ASSOC);
            
            if (empty($matkulnya)) {
                echo "<td>&nbsp;</td>";
            } else {
                $lama = $matkulnya[0]['waktuakhir'] - $matkulnya[0]['waktumulai'] +1;

                echo "<td class=\"matkul\" colspan=\" " . $lama . "\">";
                echo $matkulnya[0]['nama_matkul'] . "<br>" . $matkulnya[0]['keterangan'];
                echo "<form class=\"hapus\" method=\"POST\" action=\"hapus.php\">";
                echo "<input type=\"hidden\" name=\"id_matkul\" value=\" ". $matkulnya[0]['id_matkul'] . " \"> ";
                echo "<input type=\"submit\" value=\"hapus\"></form>";
                echo "</td>";

                $p += $lama - 1;
            }


            }
            echo "</tr>";
        }

      ?>
    </tbody>
  </table>
</body>
