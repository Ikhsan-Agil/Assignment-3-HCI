<?php
session_start();
require 'config.php';
?>


<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwaldotcom</title>
    <link rel="stylesheet" href="pertanyaan.css">

    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/16d1e76ef9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1>JADWAL .(DOT) COM</h1>
    </header>
    <div class="container">
        <H1>User Feedback</H1>
        <form id="pertanyaan" method="POST" action="thanks.php">
            <label for="nama" id="tulisan">Nama</label>
            <input type="text" name="nama" maxlength="30" id="nama" required autocomplete="off">
            <label for="email" id="tulisan">Email</label>
            <input type="text" name="email" maxlength="30" id="email" required autocomplete="off">
            <label for="instansi" id="tulisan">Asal Kampus / Instansi (isi '-' bila tidak ada)</label>
            <input type="text" name="instansi" maxlength="30" id="instansi" autocomplete="off">
            <p> Dari 1-10, seberapa puaskah Anda dengan jadwaldotcom?</p>
            <select name="rating" id="rating" required>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>" . $i . "</option>";
                }
                ?>
            </select>
            <label for="tanggapan" id="tulisan">Apa tanggapan Anda dengan website jadwaldotcom?</label>
            <textarea rows="5" type="text" name="tanggapan" maxlength="100" id="tanggapan" required autocomplete="off"></textarea>
            <label for="feedback" id="tulisan">Apa fitur yang Anda inginkan di website jadwaldotcom? (isi '-' bila tidak ada)</label>
            <textarea rows="5" type="text" name="feedback" maxlength="100" id="tanggapan" required autocomplete="off"></textarea>
            <button type='submit' name="submit" id='submit'>
                Submit
            </button>
        </form>
    </div>
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
