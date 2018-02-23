<?php
include_once "koneksi.php";

$id_dataBarang = $_POST['id_dataBarang'];

$query_delete = "delete from data_barang where id_dataBarang='$id_dataBarang'";
/*$query_tambah = "INSERT INTO jabatan_pegawai (id_jabatan, nama_jabatan,tanggal) VALUES ('sasd','asd','2016/09/09') ";*/

if (mysqli_query($connect, $query_delete)){
header('location:../halaman_komputer.php');
}
else {
echo "Gagal Memasukan Data!";
}

?>
