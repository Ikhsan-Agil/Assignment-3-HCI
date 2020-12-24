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
    
    <link rel="stylesheet" href="index.css">
    
    <!-- Google Fonts -->
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <h1>JADWAL .(DOT) COM</h1>
        <form id="caridata" method="POST" action="cariid.php">
            <input type="number" name="loadid" id="search" maxlength="10" required>
            <button type='submit' id='btncari'>
                Cari Data
            </button>
        </form>
    </header>

    <main>
        <form id="formtabel" method="POST">
            <input type="text" name="nama_matkul" id="matkul" maxlength="20" placeholder="Nama Matkul" required />
            <input type="text" name="keterangan" id="keterangan" maxlength="20" placeholder="Keterangan" required />
            <select name="hari" id="hari" required>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
                <option>Minggu</option>
            </select>
            <select name="waktumulai" id="mulai" required>
                <?php
                for ($i = 1; $i < 12; $i++) {
                    echo "<option>" . $i . "</option>";
                }
                ?>
            </select>
            <select name="waktuakhir" id="selesai" required>
                <?php
                for ($i = 1; $i < 12; $i++) {
                    echo "<option>" . $i . "</option>";
                }
                ?>
            </select>
            <button type='submit' name="submit" id='submit'>
                Submit
            </button>
            <input type="hidden" name="user_id" maxlength="10" value="<?php echo $id_user; ?>">
            
        </form>
        <form action="" method="post">
            <button type='submit' name="print" id='btnprint'>
                <a href="cetak.php" target="_blank">Cetak</a>
            </button>
        </form>

        <div id="status"></div>

        <div id="printer">
            <?php
            require 'print.php';
            ?>
            
        </div>
    </main>
</body>

</html>
