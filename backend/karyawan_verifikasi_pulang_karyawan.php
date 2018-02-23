<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "koneksi.php";

$id_kehadiran_karyawan            = addslashes($_POST['id_kehadiran_karyawan']);
$jam_pulang_karyawan_kehadiran    = date("H:i:s");

$query_verifikasi_pulang_karyawan  =  "UPDATE kehadiran set jam_pulang_karyawan_kehadiran='$jam_pulang_karyawan_kehadiran' where id_kehadiran_karyawan='$id_kehadiran_karyawan'";

if (mysqli_query($connect, $query_verifikasi_pulang_karyawan)){

  header('location:../halaman_karyawan_daftar_kehadiran_karyawan.php');
}
else {
  echo "Gagal Memasukan Data!";
}
?>
