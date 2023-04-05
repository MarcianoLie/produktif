<?php

  require 'functions.php';
  $users = query("SELECT * FROM users");

  if(isset($_GET["logout"])){
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.php?logout=true" class="general-button">Log out</a>
  <p></p>
  <a href="tambah.php">Tambah Data</a>
  <table border = "1" cellpadding = "10" cellspacing = "0">
    <tr>
      <th>Update / Delete</th>
      <th>Id</th>
      <th>Nama</th>
      <th>Alamat</th>
    </tr>
    <?php foreach ($users as $user) : ?>
    <tr>
      <td>
        <a href="ubah.php?id=<?= $user["id"] ?>">ubah</a>
        |
        <a href="hapus.php?id=<?= $user["id"] ?>" onclick = "return confirm('yakin?'); ">hapus</a>
      </td>
      <td><?= $user["id"] ?></td>
      <td><?= $user["nama"] ?></td>
      <td><?= $user["alamat"] ?></td>
    </tr>
    <?php endforeach;?>

  </table>

</body>
</html>