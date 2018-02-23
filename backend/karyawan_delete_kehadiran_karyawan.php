<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "koneksi.php";

$id_kehadiran_karyawan            = addslashes($_POST['id_kehadiran_karyawan']);
$jam_pulang_karyawan_kehadiran    = date("H:i:s");

$query_delete_kehadiran_karyawan  =  "DELETE FROM kehadiran where id_kehadiran_karyawan='$id_kehadiran_karyawan'";

if (mysqli_query($connect, $query_delete_kehadiran_karyawan)){

  header('location:../halaman_karyawan_daftar_kehadiran_karyawan.php');
}
else {
  echo "Gagal Memasukan Data!";
}
?>
