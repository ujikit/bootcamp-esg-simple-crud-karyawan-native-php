<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "koneksi.php";

$kd_karyawan_lupa_password            = addslashes($_POST['kd_karyawan_lupa_password']);
$password_baru_karyawan_lupa_password = password_hash($_POST['password_baru_karyawan_lupa_password'], PASSWORD_DEFAULT);
$tanggal_ganti_lupa_password          = date("Y-m-d");
$jam_ganti_lupa_password              = date("H:i:s");

echo $kd_karyawan_lupa_password."</br>";
echo $password_baru_karyawan_lupa_password."</br>";
echo $tanggal_ganti_lupa_password."</br>";
echo $jam_ganti_lupa_password."</br>";

$query_cekVerifikasiSebelumnya = "SELECT * from lupa_password where kd_karyawan_lupa_password='$kd_karyawan_lupa_password'";
$runquery_cekVerifikasiSebelumnya = mysqli_query($connect, $query_cekVerifikasiSebelumnya);
$num_rows_cekVerifikasiSebelumnya = mysqli_num_rows($runquery_cekVerifikasiSebelumnya);

if ($num_rows_cekVerifikasiSebelumnya > 0) {
  $delete_dataVerifikasi = mysqli_query($connect, "DELETE from lupa_password where kd_karyawan_lupa_password='$kd_karyawan_lupa_password'");
}

$query_gantiPassword  =  "INSERT INTO lupa_password (kd_karyawan_lupa_password, password_baru_karyawan_lupa_password, tanggal_ganti_lupa_password, jam_ganti_lupa_password, status_terpakai_lupa_password) values ('$kd_karyawan_lupa_password','$password_baru_karyawan_lupa_password','$tanggal_ganti_lupa_password','$jam_ganti_lupa_password', 'N')";

if (mysqli_query($connect, $query_gantiPassword)){
  header('location:../index.php');
}
else {
  echo "Gagal Memasukan Datas!";
}
?>
