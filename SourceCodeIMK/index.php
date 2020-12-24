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
    
    <!-- Google Fonts -->
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #303030;
        }

        header {

            background-color: black;
            color: whitesmoke;
            width: 100%;
            height: 80px;
            margin-right: auto;
            margin-left: auto;
        }

        h1 {
            font-family: Helvetica;
            float: left;
            margin: 20px 30px;
            font-weight: bold;
        }

        #caridata {
            float: right;
        }

        #search {

            margin: 20px 0;
            padding: 10px 40px;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        #btncari {

            background-color: #2828FF;
            color: white;
            margin: 20px 30px 0 0;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        #btncari:hover {
            background-color: #6E6EEB;
        }

        main {
            font-family: 'Roboto', sans-serif;
            margin: 30px 20px;
        }

        #matkul {
            margin-left: 30px;
            padding: 5px 5px;
            border: none;
            border-radius: 5px;
        }

        #keterangan {
            margin-left: 5px;
            padding: 5px 5px;
            border: none;
            border-radius: 5px;
        }

        #mulai {

            margin-left: 5px;
            padding: 5px 0;
            border: none;
            border-radius: 5px;
        }

        #selesai {
            margin-left: 5px;
            padding: 5px 0;
            border: none;
            border-radius: 5px;
        }

        #hari {
            margin-left: 5px;
            padding: 5px 5px;
            border: none;
            border-radius: 5px;
        }

        #submit {

            margin-left: 5px;
            background-color: #32CD32;
            padding: 5px 20px;
            display: inline;
            color: whitesmoke;
            border: none;
            outline: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 15px;
        }

        #submit:hover {
            cursor: pointer;
            background-color: #65f565;
        }

        #btnprint {
            display: inline;
            background-color: orange;
            color: white;
            font-weight: bold;
            margin-left: 30px;
            padding: 5px 20px;
            border-radius: 10px;
            font-size: 15px;
            border: none;
            cursor: pointer;

        }

        #btnprint a {
            text-decoration: none;
            color: white;
        }

        #btnprint:hover {
            background-color: gold;
        }

        table {
            margin: 20px 30px;
            color: black;
        }

        tr {
            text-align: center;
            background-color: white;

        }

        th,
        td {
            padding: 20px 30px;
        }

        p {
            color: white;
            font-size: 18px;
            margin-left: 20px;
        }

        @media print {

            h1,
            header,
            #matkul,
            #keterangan,
            #hari,
            #mulai,
            #selesai,
            #submit,
            #btnprint {
                display: none;
            }

            body {
                background-color: #FFF;
            }

            table {
                margin: auto;

                align-items: center;
                justify-content: center;
            }

            p {
                color: black;
                margin: 20px 0;
            }
        }
    </style>
    
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
        

        <div id="status"></div>

        <div id="printer">
            <?php
            require 'print.php';
            ?>
            
        </div>
        <form action="" method="post">
            <button type='submit' name="print" id='btnprint'>
                <a href="cetak.php" target="_blank">Cetak</a>
            </button>
        </form>
    </main>
</body>

</html>
