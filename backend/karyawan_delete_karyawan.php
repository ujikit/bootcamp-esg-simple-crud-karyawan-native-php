<?php
include_once "koneksi.php";
$kd_karyawan = $_POST['kd_karyawan'];

$queryDeleteFoto = "SELECT * from karyawan where kd_karyawan='$kd_karyawan'";
$tampil = mysqli_query($connect, $queryDeleteFoto);
$row = mysqli_fetch_array($tampil);

$hapus = $row['kd_karyawan'];
$hapus_foto = "../frontend/img/foto/karyawan/".$hapus;

if (mysqli_query($connect, $queryDeleteFoto)) {

  $query_hapus_pegawai = mysqli_query($connect, "DELETE from karyawan where kd_karyawan='$kd_karyawan'");
  unlink($hapus_foto);
  header('location:../halaman_karyawan_daftar_karyawan.php');

}
else {

  echo "File Foto Tidak Ditemukan";

}

 ?>
