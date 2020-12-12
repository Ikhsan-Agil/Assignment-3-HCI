<?php
    session_start();
    require 'config.php';
    require 'user_set.php';
    echo $id_user;
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Jadwaldotcom</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() { 
      $("#formtabel").submit(function(e) {
          e.preventDefault();
          $.ajax({
              url: 'input.php',
              type: 'post',
              data: $(this).serialize(),             
              success: function(data) {               
              document.getElementById("formtabel").reset();
              $('#status').html(data);              
              }
          });
      });
  })
 </script>
</head>

<body>
    <h1>JADWAL .(DOT) COM</H1>
    <form id="formtabel" method="POST">
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
    <input type='submit' id='submit' value='submit'>
    </form>
</body>
</html>
