<?php
include_once "backend/koneksi.php";
$kd_karyawan = $_GET['kd_karyawan'];
$query = mysqli_query($connect, "SELECT * from karyawan where kd_karyawan='$kd_karyawan'");
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
        <h4 class="modal-title">Delete Data Karyawan</h4>
    </div>

<form class="form-signin" action="backend/karyawan_delete_karyawan.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <input type="hidden" class="form-control" name="kd_karyawan" value="<?php echo $tampil['kd_karyawan'] ?>" readonly>
                <p>Nama Karyawan : <b style="font-size:17px;"><?php echo $tampil['nama_karyawan']  ?></b> </p>
                <p>Apakah Anda Ingin Menghapus Data Karyawan Atas Nama <b style="font-size:17px;"><?php echo $tampil["nama_karyawan"]  ?></b> ?</p>
              </div>
            </div>
          </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="submit">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
</form>

</body>
</html>
