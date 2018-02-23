<?php
session_start();
include_once 'koneksi.php';

$username_karyawan = $_POST['username_karyawan'];
$password_karyawan = $_POST['password_karyawan'];

$hak_akses = mysqli_query($connect, "SELECT * FROM karyawan WHERE username_karyawan = '$username_karyawan'");
$row = mysqli_fetch_array($hak_akses);
$hak_akses_karyawan = $row['hak_akses_karyawan'];

if ($hak_akses_karyawan == "admin") {
  if( password_verify($password_karyawan, $row['password_karyawan']) ) {
     session_start();
     $_SESSION['karyawan'] = $row['kd_karyawan'];
     header("Location: ../dashboard.php");
  }
  else {
      // login gagal
      echo "Gagal Login";
      echo "</br>";
      echo $password_karyawan;
  }
}
else {
  echo "Jabatan anda tidak tersedia / tidak punya akun";
}




?>
