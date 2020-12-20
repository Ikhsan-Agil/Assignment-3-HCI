<?php
    session_start();
    require 'config.php';
    require 'user_set.php';
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Jadwaldotcom</title>
  <?php
  require 'script.php';
  ?>
</head>

<body>
    <h1>JADWAL .(DOT) COM</H1>
    <form id="formtabel" method="POST">
    <input type="text" name="nama_matkul" maxlength="20" required/>
    <input type="text" name="keterangan" maxlength="20" required/>
    <select name="hari" required>
        <option>Senin</option>
        <option>Selasa</option>
        <option>Rabu</option>
        <option>Kamis</option>
        <option>Jumat</option>
        <option>Sabtu</option>
        <option>Minggu</option>
    </select>
    <select name="waktumulai" required>
    <?php
        for ($i = 1; $i < 12; $i++) {
            echo "<option>" . $i . "</option>";
        }
    ?>
    </select>
    <select name="waktuakhir" required>
    <?php
        for ($i = 1; $i < 12; $i++) {
            echo "<option>" . $i . "</option>";
        }
    ?>
    </select>
    <input type='submit' id='submit' value='submit'>
    </form>
    
    <div id="status"></div>
    <form id="caridata" method="POST" action="cariid.php">
    <input type="number" name="loadid" maxlength="10" required>
    <input type='submit' id='submit' value='cari data'>
    </form>

    <form id="print" method="POST" action="#">
    <input type="hidden" name="user_id" maxlength="10" value="<?php echo $id_user; ?>">
    <input type='submit' id='submit' value='print'>
    </form>

    <div id="printer">
    <?php
    require 'print.php';
    ?>
    </div>
</body>
</html>
