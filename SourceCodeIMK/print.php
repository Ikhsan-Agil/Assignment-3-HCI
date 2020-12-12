<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabut", "Minggu");
?>
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
                $sql = "SELECT nama_matkul, keterangan, waktumulai, waktuakhir FROM matkul WHERE id_user = '$id_user' AND hari = '$hari[$u]' AND waktumulai = '$p'";
                $statement = $conn->query($sql);
                $matkulnya = $statement->fetch_all(MYSQLI_ASSOC);
            
            if (empty($matkulnya)) {
                echo "<td>&nbsp;</td>";
            } else {
                $lama = $matkulnya[0]['waktuakhir'] - $matkulnya[0]['waktumulai'] +1;

                echo "<td class=\"matkul\" colspan=\" " . $lama . "\">";
                echo $matkulnya[0]['nama_matkul'] . "<br>" . $matkulnya[0]['keterangan'];
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
