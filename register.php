<?php
require 'functions.php';
if(isset($_POST["register"])){
  if(register($_POST) > 0){
    echo "<script>alert('user berhasil ditambahkan')</script>";
    header("Location: login.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="post">
    <ul>
      <h1>Register</h1>
      <li>
        <label>Username</label>
      </li>
      <li>
        <input type="text" name="username" required>
      </li>
      <li>
        <label>Email</label>
      </li>
      <li>
        <input type="email" name="email" required>
      </li>
      <li>
        <label>Password</label>
      </li>
      <li>
        <input type="password" name="password" required>
      </li>
      <li> 
        <label>Confirm password</label>
      </li>
      <li>
        <input type="password" name="password2" required>
      </li>
      <li>
        <button type="submit" name="register">Register</button>
      </li>
    </ul>
        
    
  </form>
</body>
</html>