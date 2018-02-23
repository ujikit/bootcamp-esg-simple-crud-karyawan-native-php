<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "koneksi.php";

$id_lupa_password                 = addslashes($_POST['id_lupa_password']);
$tanggal_verifikasi_lupa_password = date("Y-m-d");
$jam_verifikasi_lupa_password     = date("H:i:s");

$query_verifikasi_password_baru_karyawan  =  "UPDATE lupa_password set tanggal_verifikasi_lupa_password='$tanggal_verifikasi_lupa_password', jam_verifikasi_lupa_password='$jam_verifikasi_lupa_password', status_terpakai_lupa_password='Y' where id_lupa_password='$id_lupa_password'";

if (mysqli_query($connect, $query_verifikasi_password_baru_karyawan)){

  $query = mysqli_query($connect, "SELECT * from lupa_password inner join karyawan on lupa_password.kd_karyawan_lupa_password = karyawan.kd_karyawan where id_lupa_password='$id_lupa_password'");
  $row = mysqli_fetch_array($query);
  $kd_karyawan   = $row['kd_karyawan'];
  $password_baru = $row['password_baru_karyawan_lupa_password'];

  if (mysqli_query($connect, "UPDATE karyawan set password_karyawan='$password_baru' where kd_karyawan='$kd_karyawan'")){

    header('location:../halaman_karyawan_daftar_verifikasi_password_baru_karyawan.php');
  }
  else {
    echo "Gagal Edit Password Baru!";
  }
}
else {
  echo "Gagal Memasukan Data!";
}
?>
