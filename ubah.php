<?php
  require 'functions.php';

  $id = $_GET["id"];
  $current = query("SELECT * FROM users WHERE id = $id")[0];
  var_dump($current);


  if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
      echo "
          <script>
          alert ('Data Berhasil diubah!');
          document.location.href = 'index.php';
          </script>>
      ";
    }else{
      echo "
          <script>
          alert ('Data Gagal diubah!');
          document.location.href = 'index.php';
          </script>>
      ";
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <h1>Ubah Data</h1>
  <form action="" method="post">
    <ul>
      <input type="hidden" name="id" id="id" value = "<?= $current["id"]; ?>">
      <li>
        <label for="nama">Nama</label>
      </li>
      <li>
        <input type="text" name="nama" id="nama" value = "<?= $current["nama"]; ?>">
      </li>
      <li>
        <label for="alamat">Alamat</label>
      </li>
      <li>
        <input type="text" name="alamat" id = "alamat" value = "<?= $current["alamat"]; ?>">
      </li>
      <li>
        <button type = "submit" name="submit">Ubah Data</button>
      </li>
    </ul>

  </form>
</body>
</html>