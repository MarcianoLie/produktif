<?php
  require 'functions.php';

  if(isset($_POST["submit"])){
    if(baru($_POST) > 0){
      echo "
          <script>
          alert ('Data Berhasil ditambahkan!');
          document.location.href = 'index.php';
          </script>>
      ";
    }else{
      echo "
          <script>
          alert ('Data Gagal ditambahkan!');
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
  <h1>Tambah Data</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nama">Nama</label>
      </li>
      <li>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="alamat">Alamat</label>
      </li>
      <li>
        <input type="text" name="alamat" id = "alamat">
      </li>
      <li>
        <button type = "submit" name="submit">Tambah Data</button>
      </li>
    </ul>

  </form>
</body>
</html>