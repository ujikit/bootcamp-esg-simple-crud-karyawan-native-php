<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "koneksi.php";

$kd_karyawan                     = addslashes($_POST['kd_karyawan']);
$hari_tanggal_karyawan_kehadiran = date("Y-m-d");
$jam_datang_karyawan_kehadiran   = date("H:i:s");

$query_tambah_kehadiran_pegawai = "INSERT INTO kehadiran(kd_karyawan_kehadiran, hari_tanggal_karyawan_kehadiran, jam_datang_karyawan_kehadiran) values ('$kd_karyawan','$hari_tanggal_karyawan_kehadiran','$jam_datang_karyawan_kehadiran')";

if (mysqli_query($connect, $query_tambah_kehadiran_pegawai)){
  header('location:../halaman_karyawan_daftar_kehadiran_karyawan.php');
}
else {
  echo "Gagal Memasukan Data!";
}
?>
