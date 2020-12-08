<?php
    session_start();
    require 'config.php';
    require 'user_set.php';
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Jadwaldotcom</title>
</head>

<body>
    <h1>JADWAL .(DOT) COM</H1>
    <form action="input.php" method="POST">
    <input type="text" name="nama_matkul" maxlength="20" required/>
    <input type="text" name="keterangan" maxlength="20" required/>
    <select nama="hari" required>
        <option>Senin</option>
        <option>Selasa</option>
        <option>Rabu</option>
        <option>Kamis</option>
        <option>Jumat</option>
        <option>Sabtu</option>
        <option>Minggu</option>
    </select>
    <select nama="waktumulai" required>
    <?php
        for ($i = 1; $i < 15; $i++) {
            echo "<option>" . $i . "</option>";
        }
    ?>
    </select>
    <select nama="waktuakhir" required>
    <?php
        for ($i = 1; $i < 15; $i++) {
            echo "<option>" . $i . "</option>";
        }
    ?>
    </select>
    <button type='button'>submit</button>
    </form>
</body>
</html>