<?php
include_once "koneksi.php";

$id_dataBarang = $_POST['id_dataBarang'];
$merek_dataBarang = $_POST['merek_dataBarang'];
$jenis_dataBarang = $_POST['jenis_dataBarang'];
$jamMasuk_dataBarang = $_POST['jamMasuk_dataBarang'];
$tanggalMasuk_dataBarang = $_POST['tanggalMasuk_dataBarang'];
$stok_dataBarang = $_POST['stok_dataBarang'];

$query_update = "update data_barang set merek_dataBarang='$merek_dataBarang', foto_dataBarang='$merek_dataBarang', jenis_dataBarang='$jenis_dataBarang', jamMasuk_dataBarang='$jamMasuk_dataBarang', tanggalMasuk_dataBarang='$tanggalMasuk_dataBarang', stok_dataBarang='$stok_dataBarang' where id_dataBarang='$id_dataBarang'";
/*$query_tambah = "INSERT INTO jabatan_pegawai (id_jabatan, nama_jabatan,tanggal) VALUES ('sasd','asd','2016/09/09') ";*/

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['foto_dataBarang']['name'];
$ukuran_file = $_FILES['foto_dataBarang']['size'];
$tipe_file = $_FILES['foto_dataBarang']['type'];
$tmp_file = $_FILES['foto_dataBarang']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "../frontend/img/barang/"."$merek_dataBarang";

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :
      echo "gambar berhasil diupload database";
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='form.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='form.php'>Kembali Ke Form</a>";
}

if (mysqli_query($connect, $query_update)){
header('location:../halaman_komputer.php');
}
else {
echo "Gagal Memasukan Data!";
}

?>
