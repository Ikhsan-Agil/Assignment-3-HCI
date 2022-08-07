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

    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/16d1e76ef9.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <h1>JADWAL .(DOT) COM</h1>
        <div class='kanan'>
            <form id="caridata" method="POST" action="cariid.php">
                <input type="search" name="loadid" id="search" maxlength="10" required>
                <button type='submit' id='btncari'>
                    Cari Data
                </button>
            </form>
        </div>
    </header>

    <main>
        <form id="formtabel" method="POST">
            <input type="text" name="nama_matkul" id="matkul" maxlength="20" placeholder="Nama Matkul" required />
            <input type="text" name="keterangan" id="keterangan" maxlength="20" placeholder="Keterangan" required />
            <select name="hari" id="hari">
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
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option>" . $i . "</option>";
                }
                ?>
            </select>
            <select name="waktuakhir" id="selesai" required>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option>" . $i . "</option>";
                }
                ?>
            </select>
            <button type='submit' name="submit" id='submit'>
                Submit
            </button>
            <button onClick="window.print()" name="print" id='btnprint' title="Centang background grapich di more settings untuk mencetak warna">
                Cetak
            </button>

        </form>

        <div id="status"></div>

        <div id="info">
            <p>
                Tutorial download:
            <ol>
                <li>Pencet tombol <b>Cetak</b> untuk memulai proses penyimpanan atau cetak.</li>
                <li>Ubah Layout menjadi <b>Landscape</b> agar tabel terlihat rapih.</li>
                <li>Pilih Destination <b>Save as PDF</b>.</li>
                <li>(Opsional) Pencet <b>more option</b> dan centang pilihan <b>Background Grapich</b> untuk memunculkan warna tabel.</li>
                <li>Pencet tombol <b>Save</b> untuk menyimpan jadwal ke dalam perangkat.</b>
            </ol>
            <br>
            <l>Suka dengan website kami? bantu kami mengembangkan website ini dengan mengisi kuesioner! <a href="./pertanyaan.php">klik disini</a> untuk pergi ke kuesioner.</l>

            </p>

        </div>

        <div id="printer">
            <?php
            require 'print.php';
            ?>

        </div>
    </main>
    <footer>
        <div id="kotakfooter">
            <h2>Kontak Kami</h2>
            <div id="cc">
                Email:
                <ul>
                    <li id="list"><i class="far fa-envelope"></i>kusumaagil68@gmail.com</li>
                    <li id="list"><i class="far fa-envelope"></i>ezraelvio@yahoo.co.id</li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
