su
<?php
include_once "koneksi.php";

$namaCustomer_barangKeluar = $_POST['namaCustomer_barangKeluar'];
$merekBarang_barangKeluar = $_POST['merekBarang_barangKeluar'];
$jenisBarang_barangKeluar = $_POST['jenisBarang_barangKeluar'];
$tanggalMasuk_dataBarang = $_POST['tanggalMasuk_dataBarang'];
$jamMasuk_dataBarang = $_POST['jamMasuk_dataBarang'];
$stok_barangKeluar = $_POST['stok_barangKeluar'];

$query_barangKeluar = "INSERT INTO barang_keluar (namaCustomer_barangKeluar, merekBarang_barangKeluar, jenisBarang_barangKeluar, tanggal_barangKeluar, jam_barangKeluar, stok_barangKeluar ) VALUES ('$namaCustomer_barangKeluar', '$merekBarang_barangKeluar', '$jenisBarang_barangKeluar', '$tanggalMasuk_dataBarang', '$jamMasuk_dataBarang', $stok_barangKeluar) ";
/*$query_tambah = "INSERT INTO jabatan_pegawai (id_jabatan, nama_jabatan,tanggal) VALUES ('sasd','asd','2016/09/09') ";*/

if (mysqli_query($connect, $query_barangKeluar)){

$updateStok = "update data_barang set stok_dataBarang = stok_dataBarang - '$stok_barangKeluar' where merek_dataBarang='$merekBarang_barangKeluar'";

if (mysqli_query($connect, $updateStok)) {

  header('location:../halaman_barangKeluar.php');

}

}
else {
echo "Gagal Memasukan Data!";
}

?>
