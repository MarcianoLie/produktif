<?php
  $conn = mysqli_connect("localhost", "root", "", "produktif");

  function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
      $rows[] = $row;
    }
    return $rows;
  }


  function baru($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat =htmlspecialchars($data["alamat"]);
    $query = "INSERT INTO users 
              VALUES
              ('', '$nama', '$alamat')
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
  }

  function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
  }

  function ubah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat =htmlspecialchars($data["alamat"]);
    $id =$data["id"];
    $query = "UPDATE users SET
              nama = '$nama',
              alamat = '$alamat'
              WHERE id = '$id'
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
  }

  function register($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $email = $data["email"];
    
    if($password !== $password2){
        echo "<script> alert('konfirmasi password tidak sesuai') </script>";
        return false;
    }

    $check = mysqli_query($conn, "SELECT username FROM logintable WHERE username = '$username'");

    if(mysqli_fetch_assoc($check)){
        echo "<script> alert('username sudah dimiliki') </script>";
        return false; 
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO logintable VALUES ('', '$username', '$password', '$email')");
    

    return mysqli_affected_rows($conn);
  }










?> 