<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    
</body>
</html>
<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'connect.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"SELECT * FROM data_user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="admin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  // alihkan ke halaman dashboard admin
  header("location: ../about.html");

 // cek jika user login sebagai pegawai
 }else if($data['level']==""){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "";
  // alihkan ke halaman dashboard pegawai
  header("location: ../index.html");

 }else{
  // alihkan ke halaman login kembali
  header("location:login.php");
 } 
}else{
 header("location:login.php");
}

?>