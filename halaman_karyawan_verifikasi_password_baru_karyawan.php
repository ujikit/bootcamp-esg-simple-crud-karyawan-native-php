<?php
include_once "backend/koneksi.php";
$id_lupa_password = $_GET['id_lupa_password'];
$query = mysqli_query($connect, "SELECT * from lupa_password inner join karyawan on lupa_password.kd_karyawan_lupa_password = karyawan.kd_karyawan where id_lupa_password='$id_lupa_password'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
 ?>
<html>
<head>
</head>
<body>
 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verifikasi Password Baru Karyawan</h4>
    </div>

<form class="form-signin" action="backend/karyawan_verifikasi_password_baru_karyawan.php" method="post" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="row">
      <div class="col-lg-12">
        <input type="hidden" class="form-control" name="id_lupa_password" value="<?php echo $id_lupa_password ?>" readonly>
        <p>Nama Karyawan : <b style="font-size:17px;"><?php echo $tampil['nama_karyawan']  ?></b> </p>
        <p>Apakah Anda Ingin Memverifikasi Password Baru Karyawan Atas Nama <b style="font-size:17px;"><?php echo $tampil["nama_karyawan"]  ?></b> ?</p>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-success" type="submit" name="submit">Verifikasi</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
  </div>
</form>

</body>
</html>
