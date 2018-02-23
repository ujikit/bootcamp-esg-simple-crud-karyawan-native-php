<?php
session_start();
include_once 'koneksi.php';

$username_karyawan = $_POST['username_karyawan'];
$password_karyawan = $_POST['password_karyawan'];

$hak_akses = mysqli_query($connect, "SELECT * FROM karyawan WHERE username_karyawan = '$username_karyawan'");
$row = mysqli_fetch_array($hak_akses);
$hak_akses_karyawan = $row['hak_akses_karyawan'];

  if( password_verify($password_karyawan, $row['password_karyawan']) ) {

     session_start();
     $_SESSION['karyawan'] = $row['kd_karyawan'];
     header("Location: ../halaman_karyawan.php");

  }
  else {

      // login gagal
      echo "Gagal Login";
      echo "</br>";
      echo $password_karyawan;

  }
?>
