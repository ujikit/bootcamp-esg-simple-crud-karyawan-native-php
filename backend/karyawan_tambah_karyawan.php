<?php

include_once "koneksi.php";

$kd_karyawan            = addslashes($_POST['kd_karyawan']);
$nama_karyawan          = addslashes($_POST['nama_karyawan']);
$hak_akses_karyawan     = addslashes($_POST['hak_akses_karyawan']);
$username_karyawan      = addslashes($_POST['username_karyawan']);
$password_karyawan      = password_hash($_POST['password_karyawan'], PASSWORD_DEFAULT);
$jenis_kelamin_karyawan = addslashes($_POST['jenis_kelamin_karyawan']);
$jabatan_karyawan       = addslashes($_POST['jabatan_karyawan']);
$no_hp_karyawan         = addslashes($_POST['no_hp_karyawan']);
$alamat_karyawan        = addslashes($_POST['alamat_karyawan']);

$query_tambah_pegawai = "INSERT INTO karyawan (kd_karyawan, nama_karyawan, hak_akses_karyawan, username_karyawan, password_karyawan, jenis_kelamin_karyawan, jabatan_karyawan, no_hp_karyawan, alamat_karyawan) VALUES ('$kd_karyawan','$nama_karyawan','$hak_akses_karyawan','$username_karyawan','$password_karyawan','$jenis_kelamin_karyawan','$jabatan_karyawan','$no_hp_karyawan','$alamat_karyawan')";

  // Ambil Data yang Dikirim dari Form
  $nama_file = $_FILES['foto_karyawan']['name'];
  $ukuran_file = $_FILES['foto_karyawan']['size'];
  $tipe_file = $_FILES['foto_karyawan']['type'];
  $tmp_file = $_FILES['foto_karyawan']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya

  $path = "../frontend/img/foto/karyawan/"."$kd_karyawan";

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

if (mysqli_query($connect, $query_tambah_pegawai)){

  header('location:../halaman_karyawan_daftar_karyawan.php');
}
else {
  echo "Gagal Memasukan Data!";
}
?>
